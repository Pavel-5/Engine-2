<?php

namespace app\engine\data;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function getSession($name = null)
    {
        return empty($name) ? $_SESSION : $_SESSION[$name];
    }

    public function setSession($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function getSessionId()
    {
        return session_id();
    }

    public function regenerateSession() {
        session_regenerate_id();
    }

    public function destroySession() {
        session_destroy();
    }
}