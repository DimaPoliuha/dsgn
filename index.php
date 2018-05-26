<?php
/**
 * Created by PhpStorm.
 * User: Dmitry
 * Date: 25.05.2018
 * Time: 19:21
 */

use application\core\Router;

require_once 'application/lib/Dev.php';

spl_autoload_register(function ($class){
    $path = str_replace('\\', '/', $class . '.php');
    if(file_exists($path)){
        require_once $path;
    }
});

session_start();

$router = new Router;
$router->run();