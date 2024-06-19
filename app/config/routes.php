<?php

use app\controllers\ApiExampleController;
use flight\Engine;
use flight\net\Router;

/**
 * @var Router $router
 * @var Engine $app
 */
// $router->get('/', function () use ($app)
// {
//     $app->render('welcome', ['message' => 'You are gonna do great things!']);
// });

$router->get('/hello-world/@name', function ($name)
{
    echo '<h1>Hello world! Oh hey ' . $name . '!</h1>';
});

$router->group('/api', function () use ($router, $app)
{
    $Api_Example_Controller = new ApiExampleController($app);
    $router->get('/users', [$Api_Example_Controller, 'getUsers']);
    $router->get('/users/@id:[0-9]', [$Api_Example_Controller, 'getUser']);
    $router->post('/users/@id:[0-9]', [$Api_Example_Controller, 'updateUser']);
});

class Salo
{
    public static function daySalo()
    {
        echo 'hello world!<br> Дайце сала шматочак';
        echo '<br>';
        echo 'идзи на хуй';
    }
}

class Balon
{
    public static function dddd($year = 2024, $month = 06, $day = 19)
    {
        echo '// This will match the following URLS:' . $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo/2012/12/10' . $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo/2012/12' . $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo/2012' . $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo' . $year . '-' . $month . '-' . $day . '<br>';
    }
}

Flight::route('/inh', function ()
{
    echo 'идзи на хуй';});

Flight::route(
    '/blog(/@year(/@month(/@day)))',
    function ( ? string $year,  ? string $month,  ? string $day)
    {
        // Это совпадет с следующими URL:
        // /blog/2012/12/10
        // /blog/2012/12
        // /blog/2012
        // /bloguuuu

        echo '// This will match the following URLS:' ." ---->". $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo/2012/12/10' ." ---->". $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo/2012/12' ." ---->". $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo/2012' ." ---->". $year . '-' . $month . '-' . $day . '<br>';
        echo '// /balo' ." ---->". $year . '-' . $month . '-' . $day . '<br>';
    }
);

Flight::route('/balo', ['balon', 'dddd']);
Flight::route('/salo', ['Salo', 'daySalo']);