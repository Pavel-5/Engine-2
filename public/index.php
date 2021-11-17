<?php

//Создаем псевдонимы классам
use app\engine\App;

//Подключаем конфиг
$config = include dirname(__DIR__) . "/config/config.php";

//Автозагрузчик
require_once $config['root'] . '/vendor/autoload.php';

try {
    App::call()->run($config);
} catch (\PDOException $e) {
    echo "Ошибка соединения с сервером";
} catch (\Exception $e) {
    echo $e->getMessage();
}

