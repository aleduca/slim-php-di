<?php

use app\database\Connection;
use app\templates\Plates;
use app\templates\TemplateInterface;
use Doctrine\DBAL\Connection as ConnectionDBAL;

return [
  ConnectionDBAL::class => Connection::get(),
  TemplateInterface::class => \DI\autowire(Plates::class),
];
