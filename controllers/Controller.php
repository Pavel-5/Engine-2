<?php

namespace app\controllers;

use app\engine\App;
use app\interfaces\{IRender};

abstract class Controller
{
    private $action;
    protected $layout = 'main';
    protected $useLayout = true;

    abstract public function getDefaultAction();

    public function runAction($action)
    {
        $this->action = $action ?? $this->getDefaultAction();
        $method = "action" . ucfirst($this->action);
        if (method_exists($this, $method)) {
            $this->$method();
        } else {
            die("Нет такого экшена");
        }
    }

    public function render($template, $params = [])
    {
        if ($this->useLayout) {
            $auth = App::call()->auth;
            $basketRepository = App::call()->basketRepository;

            return $this->renderTemplate('layouts/' . $this->layout, [
                'menu' => $this->renderTemplate('menu', [
                    'isAuth' => $auth->isAuth(),
                    'isAdmin' => $auth->isAdmin(),
                    'username' => $auth->getName(),
                    'count' => $basketRepository->getCountWhere('goods_id', ['session_id' => App::call()->session->getSessionId()]),
                ]),
                'content' => $this->renderTemplate($template, $params),
            ]);
        } else {
            return $this->renderTemplate($template, $params);
        }
    }

    private function renderTemplate($template, $params)
    {
        return App::call()->render->renderTemplate($template, $params);
    }
}