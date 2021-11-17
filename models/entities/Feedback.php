<?php

namespace app\models\entities;

use app\models\EntityModel;

class Feedback extends EntityModel
{
    protected $id;
    protected $author;
    protected $text;

    protected $props = [
        'author' => false,
        'text' => false
    ];

    public function __construct($author = null, $text = null)
    {
        $this->author = $author;
        $this->text = $text;
    }
}