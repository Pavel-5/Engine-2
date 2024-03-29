<?php

namespace app\engine\data;

use app\interfaces\IRequest;

class Request implements IRequest
{
    protected $requestString;
    protected $controllerName;
    protected $actionName;

    protected $method;

    protected $params = []; //$_REQUEST

    public function __construct()
    {
        $this->parseRequest();
    }

    protected function parseRequest() {
        $this->requestString = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];

        $url = explode('/', $this->requestString);

        $this->controllerName = $url[1];
        $this->actionName = $url[2];

        $this->params = $_REQUEST;
    }

    public function getControllerName()
    {
        return $this->controllerName;
    }

    public function getActionName()
    {
        return $this->actionName;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}