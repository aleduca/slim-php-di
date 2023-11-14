<?php

namespace app\database\models;

use Doctrine\DBAL\Connection;

class User
{
    public function __construct(
        private Connection $connection
    ) {
    }

    public function users()
    {
        $sql = 'select * from users';
        $prepare = $this->connection->prepare($sql);

        return $prepare->executeQuery()->fetchAllAssociative();
    }

    public function insert(
        array $data
    ) {
        unset($data['confirm_password']);
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        $sql = 'insert into users(firstName,lastName,email,password) values(:firstName,:lastName,:email,:password)';
        $stmt = $this->connection->prepare($sql);

        foreach ($data as $key => $value) {
            $stmt->bindValue($key, $value);
        }

        return $stmt->executeStatement();
    }
}
