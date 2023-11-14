<?php

session_start();

use DI\ContainerBuilder;
use Slim\Factory\AppFactory;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

$container = new ContainerBuilder();
$containers = require __DIR__ . '/../app/config/containers.php';

$container->addDefinitions($containers);

$container = $container->build();

AppFactory::setContainer($container);
$app = AppFactory::create();

// $app->add(
//     function ($request, $next) {
//         // Start PHP session
//         if (session_status() !== PHP_SESSION_ACTIVE) {
//             session_start();
//         }

//         // Change flash message storage
//         $this->get('flash')->__construct($_SESSION);

//         return $next->handle($request);
//     }
// );

// $app->addErrorMiddleware(true, true, true);

$routes = require __DIR__ . '/../app/routes/web.php';
$routes($app);
