<?php

namespace app\controllers;

use app\engine\App;
use app\models\entities\Order;

class OrderController extends Controller
{
    public function getDefaultAction()
    {
        return 'all';
    }

    public function actionAll()
    {
    }

    public function actionDescription($action = 'description')
    {
        $isAdmin = App::call()->auth->isAdmin();

        if ($isAdmin) {
            $id = App::call()->request->getParams()['id'];

            $order = App::call()->orderRepository->getOrderWithUser($id);
            $goods = App::call()->basketRepository->getBasket($order['session_id']);

            $params = [
                'isAdmin' => $isAdmin,
                'order' => $order,
                'goods' => $goods,
                'action' => $action
            ];

            echo $this->render('orderDescription', $params);
        } else {
            throw new \Exception("404", 404);
        }
    }

    public function actionAdd()
    {
        $params = App::call()->request->getParams();
        $session = App::call()->session;

        $order = new Order();

        $order->name = $params['name'];
        $order->phone = $params['phone'];
        $order->session_id = $session->getSessionId();
        $order->status = "Новый";

        $login = App::call()->auth->getName();

        $user = App::call()->userRepository->getOneWhere('login', $login);

        $order->user_id = $user->id;

        $order->sum = App::call()->basketRepository->getSumBasket($order->session_id);

        App::call()->orderRepository->save($order);

        $session->regenerateSession();
        $session->setSession('login', $login);

        header("Location: " . $_SERVER['HTTP_REFERER']);
        die();
    }

    public function actionDelete()
    {
        if (App::call()->auth->isAdmin()) {
            $id = App::call()->request->getParams()['id'];

            $order = App::call()->orderRepository->getOne($id);

            App::call()->orderRepository->delete($order);

            header("Location: " . $_SERVER['HTTP_REFERER']);
            die();
        } else {
            throw new \Exception("404", 404);
        }
    }

    public function actionChangeStatus()
    {
        $this->actionDescription('changeStatus');
    }

    public function actionSaveStatus()
    {
        if (App::call()->auth->isAdmin()) {
            $id = App::call()->request->getParams()['id'];
            $status = App::call()->request->getParams()['status'];

            $order = App::call()->orderRepository->getOne($id);
            $order->status = $status;
            App::call()->orderRepository->save($order);

            header("Location: /order/description/?id=" . $id);
            die();
        } else {
            throw new \Exception("404", 404);
        }
    }
}