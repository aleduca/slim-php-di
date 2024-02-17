<?php

namespace app\controllers;

use app\database\models\Post;
use app\library\Paginator;
use app\templates\TemplateInterface;

class PostController
{
  public function __construct(
    private TemplateInterface $template,
    private Post $post,
  ) {
  }

  public function index($request, $response)
  {
    $users = new Paginator($this->post, 5);

    $this->template->render('posts', [
      'posts' => $users->items(),
      'links' => $users->links(),
    ]);

    return $response;
  }
}
