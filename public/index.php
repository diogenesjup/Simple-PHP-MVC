<?php

/**
 * Front controller
 *
 * PHP version 7.4
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
//error_reporting(E_ALL);
ini_set("display_errors", FALSE );
ini_set("log_errors", TRUE );
ini_set("error_log","log_erros_php.log");

set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
//$router->add('{controller}/{action}');

$router->add('diogenes', ['controller' => 'Post', 'action' => 'index']);
$router->add('junior', ['controller' => 'Post', 'action' => 'index']);
$router->add('junior/{id:\d+}', ['controller' => 'Post', 'action' => 'ver']);
$router->add('diogenesjup/artigos/{id:\d+}/{slug:\w+}', ['controller' => 'Post', 'action' => 'saber']);
    
$router->dispatch($_SERVER['QUERY_STRING']);
