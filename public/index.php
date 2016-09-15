<?php

/**
 * Front Controller
 *
 * PHP version 5.6
 */

/**
 * Routing
 */
require '../Core/Router.php';

$router = new Router();

// Add the routes
$router->add('', ['controller' => 'HomeController', 'action' => 'index']);
$router->add('posts', ['controller' => 'PostsController', 'action' => 'index']);
// $router->add('posts/new', ['controller' => 'PostsController', 'action' => 'new']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
// $router->add('admin/{action}/{controller}');

// Display the routing table
echo "<pre>";
    echo htmlspecialchars(print_r($router->getRoutes(), true));
echo "</pre>";

$url = $_SERVER['QUERY_STRING'];

if ($router->match($url)) {
    echo '<pre>';
        var_dump($router->getParams());
    echo '</pre>';
} else {
    echo "No route found for URL {$url}";
}
