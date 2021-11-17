<?php

namespace app\models\entities;

use app\models\EntityModel;

class Category extends EntityModel
{
    protected $id;
    protected $title;

    protected $props = [
        'title' => false
    ];

    public function __construct($title = null)
    {
        $this->title = $title;
    }
}