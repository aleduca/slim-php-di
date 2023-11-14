<?php

namespace app\database;

use Doctrine\DBAL\DriverManager;

class Connection
{
    public static function get()
    {
        return DriverManager::getConnection([
            'dbname' => $_ENV['DBNAME'],
            'user' => $_ENV['USER'],
            'password' => $_ENV['PASSWORD'],
            'host' => $_ENV['HOST'],
            'driver' => $_ENV['DRIVER'],
        ]);
    }
}
