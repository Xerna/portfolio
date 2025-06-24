<?php
define('BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/Portfolio');
require_once 'helpers.php';
require_once 'config/Database.php';
require_once 'framework/Router.php';
require_once 'controllers/ProjectController.php';
require_once 'controllers/MainController.php';

// Configurar el enrutador
$router = new Router();

// Definir las rutas
$router->get('/', 'MainController@index');


// $router->get('/users', 'UserController@index');
// $router->get('/user/(\d+)', 'UserController@show');
// $router->post('/user', 'UserController@store');
// $router->post('/user/(\d+)', 'UserController@update');
// $router->delete('/user/(\d+)', 'UserController@delete');

// Ejecutar la ruta
$router->run();
