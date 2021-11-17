<?php

namespace app\models\repositories;

use app\engine\App;
use app\models\RepositoryModel;

class OrderRepository extends RepositoryModel
{
    protected function getTableName()
    {
        return 'orders';
    }

    protected function getEntityClass()
    {
        return "app\\models\\entities\\Order";
    }

    public function getOrders()
    {
        $sql = "SELECT o.id, o.name, o.phone, u.login AS user, o.status, o.sum FROM orders as o JOIN users u ON u.id = o.user_id";

        return App::call()->db->queryAll($sql);
    }

    public function getOrderWithUser($id)
    {
        $sql = "SELECT o.id, o.name, o.phone, o.session_id, u.login AS user, o.status, o.sum FROM orders as o JOIN users u ON u.id = o.user_id WHERE o.id = :id";

        return App::call()->db->queryOne($sql, ['id' => $id]);
    }
}