<?php

namespace app\engine;

use app\engine\data\Session;
use app\interfaces\{IAuth, IRequest, IRender};
use app\models\repositories\{BasketRepository, FeedbackRepository, ProductRepository, UserRepository, OrderRepository};
use app\traits\TSingletone;


/**
 * Class App
 * @property IRender $render
 * @property IRequest $request
 * @property IAuth $auth
 * @property Session $session
 * @property BasketRepository $basketRepository
 * @property UserRepository $userRepository
 * @property ProductRepository $productRepository
 * @property OrderRepository $orderRepository
 * @property FeedbackRepository $feedbackRepository
 * @property Db $db
 */
class App
{
    use TSingletone;

    public $config;
    private $components;

    private $controller;
    private $action;

    public function runController() {
        $this->controller = $this->request->getControllerName() ?: 'index';
        $this->action = $this->request->getActionName();
        $controllerClass = $this->config['controllersNamespaces'] . ucfirst($this->controller) . "Controller";

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            $controller->runAction($this->action);
        } else {
            echo "404";
        }
    }

    /**
     * @return static
     */
    public static function call()
    {
        return static::getInstance();
    }

    public function run($config)
    {
        $this->config = $config;
        $this->components = new Storage();
        $this->runController();
    }

    public function createComponent($name) {
        if (isset($this->config['components'][$name])) {
            $params = $this->config['components'][$name];
            $class = $params['class'];
            if (class_exists($class)) {
                unset($params['class']);

                $reflection = new \ReflectionClass($class);
                return $reflection->newInstanceArgs($params);
            }
        }
        die("Компонента {$name} не существует в конфигурации системы!");
    }

    public function __get($name)
    {
        return $this->components->get($name);
    }
}