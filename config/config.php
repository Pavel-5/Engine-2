<?php

use app\engine\{Db, Auth};
use app\engine\data\{Request, Session};
use app\engine\render\Render;
use app\models\repositories\{BasketRepository, ProductRepository, UserRepository, OrderRepository, FeedbackRepository};

return [
    'root' => dirname(__DIR__),
    'adminLogin' => 'admin',
    'countProductsOnPage' => 2,
    'controllersNamespaces' => 'app\\controllers\\',
    'viewsDir' => dirname(__DIR__) . "/views/",
    'components' => [
        'db' => [
            'class' => Db::class,
            'driver' => 'mysql',
            'host' => 'localhost',
            'login' => 'root',
            'password' => '',
            'database' => 'gb1',
            'charset' => 'utf8'
        ],
        'render' => [
            'class' => Render::class
        ],
        'request' => [
            'class' => Request::class
        ],
        'auth' => [
            'class' => Auth::class
        ],
        'session' => [
            'class' => Session::class
        ],
        'basketRepository' => [
            'class' => BasketRepository::class
        ],
        'productRepository' => [
            'class' => ProductRepository::class
        ],
        'userRepository' => [
            'class' => UserRepository::class
        ],
        'orderRepository' => [
            'class' => OrderRepository::class
        ],
        'feedbackRepository' => [
            'class' => FeedbackRepository::class
        ]
    ]
];
