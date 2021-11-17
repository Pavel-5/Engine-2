<?php

namespace app\interfaces;

interface IAuth
{
    public function isAuth();
    public function auth($login, $pass);
    public function setHashCookie($id = null);
    public function getName();
}