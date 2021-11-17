<?php

namespace app\engine\render;

use app\interfaces\IRender;

class TwigRender implements IRender
{
    private $twig;

    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../templates');
        $this->twig = new \Twig\Environment($loader);
    }

    public function renderTemplate($template, $params = [])
    {
        $templateName = $template . ".twig";
        return $this->twig->render($templateName, $params);
    }
}