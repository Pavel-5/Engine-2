<?php

namespace app\controllers;

use app\engine\App;
use app\models\entities\Basket;

class BasketController extends Controller
{
    public function getDefaultAction()
    {
        return 'basket';
    }

    public function actionBasket()
    {
        $session_id = App::call()->session->getSessionId();

        $basket = App::call()->basketRepository->getBasket($session_id);

        echo $this->render('basket', [
            'basket' => $basket,
            'isAuth' => App::call()->auth->isAuth()
        ]);
    }

    public function actionAdd()
    {
        $basket = new Basket();

        $basket->goods_id = App::call()->request->getParams()['id'];
        $basket->session_id = App::call()->session->getSessionId();

        App::call()->basketRepository->save($basket);

        $props = [
            'session_id' => $basket->session_id
        ];

        $response = [
            'status' => 'ok',
            'count' => App::call()->basketRepository->getCountWhere('goods_id', $props)
        ];

        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        die();
    }

    public function actionDelete()
    {
        $id = App::call()->request->getParams()['id'];
        $session_id = App::call()->session->getSessionId();

        $countStrDeleted = App::call()->basketRepository->deleteWhere(['goods_id' => $id, 'session_id' => $session_id]);

        $props = [
            'session_id' => $session_id
        ];

        $response = [
            'status' => $countStrDeleted != 0 ? 'ok' : 'error',
            'count' => App::call()->basketRepository->getCountWhere('goods_id', $props)
        ];

        echo json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        die();
    }
}