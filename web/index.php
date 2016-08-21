<?php
use DI\Container;

require_once "../vendor/autoload.php";

/** @var \DI\Container $container */
$container = require "../app/bootstrap.php";


$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'HomeController');
    $r->addRoute('GET', '/quiz', ['Quiz\QuizController', 'showAll']);
    $r->addRoute('GET', '/quiz/{id}', ['Quiz\QuizController', 'show']);
});

$route = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

switch($route[0]) {
    case FastRoute\Dispatcher::NOT_FOUND: {
        echo "404 - Not found!";
        break;
    }
    case FastRoute\Dispatcher::FOUND : {
        $container->call($route[1], $route[2]);
        break;
    }
    default : {
        echo "501";
    }
}

