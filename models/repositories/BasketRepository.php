<?php

namespace app\models\repositories;

use app\engine\App;
use app\engine\Db;
use app\models\RepositoryModel;

class BasketRepository extends RepositoryModel
{
    protected function getTableName()
    {
        return 'basket';
    }

    protected function getEntityClass()
    {
        return "app\\models\\entities\\Basket";
    }

    public static function getBasket($session_id)
    {
        $sql = "SELECT goods.id AS prod_id, goods.title, goods.description, goods.price, COUNT(*) AS quantity FROM `basket` JOIN `goods` ON basket.goods_id = goods.id WHERE `session_id` = :session_id GROUP BY prod_id";
        return App::call()->db->queryAll($sql, [
            'session_id' => $session_id
        ]);
    }

    public static function getSumBasket($session_id)
    {
        $sql = "SELECT SUM(price) AS sum FROM `basket` JOIN `goods` ON basket.goods_id = goods.id WHERE `session_id` = :session_id";
        return App::call()->db->queryOne($sql, [
            'session_id' => $session_id
        ])['sum'];
    }

    public function getProduct()
    {
        // return Product::getOne($this->goods_id);
        //$basket->getProduct
    }
}