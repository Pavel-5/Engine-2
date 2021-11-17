<?php

namespace app\engine\render;

use app\engine\App;
use app\interfaces\IRender;

class Render implements IRender
{
    public function renderTemplate($template, $params = [])
    {
        ob_start();

        extract($params);

        $templatePath = App::call()->config['viewsDir'] . $template . ".php";

        include $templatePath;

        return ob_get_clean();
    }
}