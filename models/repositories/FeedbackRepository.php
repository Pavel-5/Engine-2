<?php

namespace app\models\repositories;

use app\models\RepositoryModel;

class FeedbackRepository extends RepositoryModel
{
    protected function getTableName()
    {
        return 'feedback';
    }

    protected function getEntityClass()
    {
        return "app\\models\\entities\\Feedback";
    }
}