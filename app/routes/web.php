<?php

use app\controllers\HomeController;
use app\controllers\LoginController;
use app\controllers\UserController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HomeController::class, 'index']);
    $app->get('/users', [UserController::class, 'index']);
    $app->get('/register', [UserController::class, 'create']);
    $app->post('/register', [UserController::class, 'store']);
    $app->get('/login', [LoginController::class, 'index']);
    $app->post('/login', [LoginController::class, 'store']);
    $app->post('/logout', [LoginController::class, 'destroy']);

    $app->run();
};
