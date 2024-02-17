<?php

namespace app\templates;

use League\Plates\Engine;

class Plates implements TemplateInterface
{
  public function render(
    string $template,
    array $data = []
  ) {
    $templates = new Engine(dirname(__FILE__, 3) . DIRECTORY_SEPARATOR . 'resources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'plates');

    // Render a template
    echo $templates->render($template, $data);
  }
}
