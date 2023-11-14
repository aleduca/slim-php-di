<?php

use app\database\Connection;
use app\library\Smarty;
use app\templates\TemplateInterface;
use Doctrine\DBAL\Connection as ConnectionDBAL;

return [
    ConnectionDBAL::class => Connection::get(),
    TemplateInterface::class => \DI\autowire(Smarty::class),
];
