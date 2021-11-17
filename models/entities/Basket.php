<?php

namespace app\models\entities;

use app\models\EntityModel;

class Basket extends EntityModel
{
    protected $id;
    protected $goods_id;
    protected $session_id;

    protected $props = [
        'goods_id' => false,
        'session_id' => false
    ];

    public function __construct($goods_id = null, $session_id = null)
    {
        $this->goods_id = $goods_id;
        $this->session_id = $session_id;
    }
}
