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
    $posts = new Paginator($this->post, 5);

    $this->template->render('posts', [
      'posts' => $posts->items(),
      'links' => $posts->links(),
    ]);

    return $response;
  }
}
