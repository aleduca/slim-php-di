<?php

namespace app\controllers;

use app\database\models\User;
use app\library\Paginator;
use app\templates\TemplateInterface;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{
  public function __construct(
    private TemplateInterface $template,
    private User $user,
  ) {
  }

  public function index(RequestInterface $request, ResponseInterface $response)
  {
    $users = new Paginator($this->user, 5);

    $this->template->render('home', [
      'users' => $users->items(),
      'links' => $users->links(),
    ]);

    return $response;
  }
}
