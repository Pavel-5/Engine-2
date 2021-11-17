<?php

namespace app\models\repositories;

use app\models\RepositoryModel;

class CategoryRepository extends RepositoryModel
{
    protected function getTableName()
    {
        return 'categories';
    }

    protected function getEntityClass()
    {
        return "app\\models\\entities\\Category";
    }
}