<?php

namespace app\controllers;

use app\engine\App;

class AdminController extends Controller
{
    public function getDefaultAction()
    {
        return 'admin';
    }

    public function actionAdmin()
    {
        $isAdmin = App::call()->auth->isAdmin();
        if ($isAdmin) {
            $orders = App::call()->orderRepository->getOrders();

            $params = [
                'isAdmin' => $isAdmin,
                'orders' => $orders
            ];

            echo $this->render('admin', $params);
        } else {
            throw new \Exception("404", 404);
        }
    }
}