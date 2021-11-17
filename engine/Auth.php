<?php

namespace app\engine;

use app\interfaces\IAuth;
use app\models\entities\User;

class Auth implements IAuth
{
    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function isAuth()
    {
        $session = App::call()->session;

        $sessionLogin = $session->getSession('login');

        if (isset($_COOKIE["hash"]) && !isset($sessionLogin)) {
            $hash = $_COOKIE["hash"];

            $this->user = App::call()->userRepository->getOneWhere('hash', $hash);

            if ($this->user && !empty($this->user->login)) {
                $session->setSession('login', $this->user->login);
            }
        }

        $sessionLogin = $session->getSession('login');
        return isset($sessionLogin);
    }

    public function isAdmin() {
        return App::call()->config['adminLogin'] === App::call()->session->getSession('login');
    }

    public function auth($login, $pass)
    {
        $this->user = App::call()->userRepository->getOneWhere('login', $login);

        if ($this->user && password_verify($pass, $this->user->pass)) {
            App::call()->session->setSession('login', $login);
        }

        return $this->isAuth();
    }

    public function setHashCookie($id = null)
    {
        $hash = uniqid(rand(), true);

        if (!empty($id)) {
            $this->user = App::call()->userRepository->getOne($id);
        }

        $this->user->hash = $hash;

        App::call()->userRepository->save($this->user);

        setcookie("hash", $hash, time() + 3600, "/");
    }

    public function getName()
    {
        return App::call()->session->getSession('login');
    }
}