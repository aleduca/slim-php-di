<?php

namespace app\library;

use app\templates\TemplateInterface;

class Smarty implements TemplateInterface
{
    public function render(string $template, array $data = [])
    {
        $smarty = new \Smarty();

        $smarty->setTemplateDir('../resources/views/');
        $smarty->setConfigDir('../resources/views/configs/');
        $smarty->setCompileDir('../resources/views/templates_c/');
        $smarty->setCacheDir('../resources/views/cache/');

        $smarty->registerPlugin('modifier', 'du', 'var_dump');

        $smarty->assign($data);
        $smarty->display($template);
    }
}
