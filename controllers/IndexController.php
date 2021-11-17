<?php

namespace app\controllers;

class IndexController extends Controller
{
    public function getDefaultAction() {
        return 'index';
    }

    public function actionIndex()
    {
        echo $this->render('index');
    }
}