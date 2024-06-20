<?php

use flight\Engine;
use flight\database\PdoWrapper;
use Smarty\Smarty;
/** 
 * @var array $config This comes from the returned array at the bottom of the config.php file
 * @var Engine $app
 */
$dsn = 'mysql:host=' . $config['database']['host'] . ';dbname=' . $config['database']['dbname'] . ';charset=utf8mb4';
$app->register('db', PdoWrapper::class, [ $dsn, $config['database']['user'], $config['database']['password'] ]);

// Got google oauth stuff? You could register that here
// $app->register('google_oauth', Google_Client::class, [ $config['google_oauth'] ]);

// Redis? This is where you'd set that up
// $app->register('redis', Redis::class, [ $config['redis']['host'], $config['redis']['port'] ]);




// Регистрация Smarty в качестве класса представления
// Также передайте функцию обратного вызова для настройки Smarty при загрузке
Flight::register('view', Smarty::class, [], function (Smarty $smarty) {

  // $smarty->setTemplateDir('./templates/');
  // $smarty->setCompileDir('./templates_c/');
  // $smarty->setConfigDir('./config/');
  // $smarty->setCacheDir('./cache/');


  ### //init Smarty 5.3
  // $smarty = new Smarty();  // НЕЛЬЗЯ!!!
  $smarty->setTemplateDir(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app/views/smarty/templates/');              // здесь лежат шаблоны tpl.html
  $smarty->setCompileDir(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app/views/smarty/templates_cache/');    // здесь компилируюся *.php
  $smarty->setConfigDir(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app/views/smarty/templates/config/'); // незнаю
  $smarty->setCacheDir(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app/views/smarty/templates/cache/');
  $smarty->compile_id    = 'ant';
  // $smarty->debugging    = 1;
  $smarty->force_compile = true; ##ADMIN_SMARTY_FORCE_COMPILE;
  // $smarty->setEscapeHtml(true); //Enable auto-escaping for HTML as follows:
  $smarty->setEscapeHtml(false);
  // $smarty->testInstall();
});


Flight::map('render', function(string $template, array $data): void {
  Flight::view()->assign($data);
  Flight::view()->display($template);
});
