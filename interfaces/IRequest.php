<?php

namespace app\interfaces;

interface IRequest
{
    public function getControllerName();
    public function getActionName();
    public function getMethod();
    public function getParams(): array;
}