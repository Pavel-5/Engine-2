<?php

namespace app\models\repositories;

use app\models\RepositoryModel;

class UserRepository extends RepositoryModel
{
    protected function getTableName()
    {
        return 'users';
    }

    public function getEntityClass()
    {
        return "app\\models\\entities\\User";
    }
}