<?php

namespace app\models\repositories;

use app\engine\App;
use app\engine\Db;
use app\models\RepositoryModel;

class ProductRepository extends RepositoryModel
{
    protected function getTableName()
    {
        return 'goods';
    }

    protected function getEntityClass()
    {
        return "app\\models\\entities\\Product";
    }

    public function getQuantityProducts()
    {
        $tableName = $this->getTableName();

        $sql = "SELECT COUNT(id) as count FROM {$tableName}";

        return (int)App::call()->db->queryOne($sql)['count'];
    }
}