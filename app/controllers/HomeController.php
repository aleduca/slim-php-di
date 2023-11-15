<?php

namespace app\controllers;

use app\database\models\User;
use app\templates\TemplateInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
    public function __construct(
        private ContainerInterface $container,
        private TemplateInterface $template
    ) {
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        $users = $this->container->get(User::class)->users();

        $this->template->render('home', ['users' => $users]);

        return $response;
    }
}
