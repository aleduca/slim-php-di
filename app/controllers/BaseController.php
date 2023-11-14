<?php

namespace app\controllers;

use app\library\Smarty;

abstract class BaseController
{
    public function render($template, $data = [])
    {
        return (new Smarty)->render($template, $data);
    }
}
