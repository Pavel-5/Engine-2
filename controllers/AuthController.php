<?php

namespace app\controllers;

use app\engine\App;

class AuthController extends Controller
{
    public function getDefaultAction()
    {
        return "login";
    }

    public function actionLogin()
    {
        $params = App::call()->request->getParams();

        $login = $params['login'];
        $pass = $params['pass'];

        if (App::call()->auth->auth($login, $pass)) {
            if (isset($params['save'])) {
                App::call()->auth->setHashCookie();
            }

            ($_SERVER["HTTP_REFERER"] === $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . "/registration")
                ? header("Location: /")
                : header("Location: " . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            die("Не верный логин пароль");
        }
    }

    public function actionLogout()
    {
        setcookie("hash", "", time() - 1, "/");
        App::call()->session->regenerateSession();
        App::call()->session->destroySession();

        header("Location:" . $_SERVER['HTTP_REFERER']);
        die();
    }
}