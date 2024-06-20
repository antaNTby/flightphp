<?php


$ds = DIRECTORY_SEPARATOR;
require(__DIR__. $ds . '..' . $ds . 'app' . $ds . 'config' . $ds . 'bootstrap.php');


// Назначить данные шаблона
Flight::view()->assign('name', 'Bob');

// Отобразить шаблон
// Flight::view()->display('hello.tpl');
