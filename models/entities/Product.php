<?php

namespace app\models\entities;

use app\models\EntityModel;

class Product extends EntityModel
{
    protected $id;
    protected $title;
    protected $price;
    protected $description;
    protected $image;
    protected $category_id;

    protected $props = [
        'title' => false,
        'price' => false,
        'description' => false,
        'image' => false,
        'category_id' => false
    ];

    public function __construct($title = null, $price = null, $description = null, $image = null, $category_id = null)
    {
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->image = $image;
        $this->category_id = $category_id;
    }
}
