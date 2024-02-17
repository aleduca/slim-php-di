<?php

namespace app\database\models;

use Doctrine\DBAL\Connection;

abstract class Model
{
  protected string $table = '';

  public function __construct(
    protected Connection $connection
  ) {
  }

  public function paginate(
    int $limit = 5,
    int $offset = 0
  ) {
    $sql = "select * from {$this->table} LIMIT {$limit} OFFSET {$offset}";
    return $this->executeQuery($sql)->fetchAllAssociative();
  }

  protected function executeQuery(string $sql)
  {
    return $this->connection->prepare($sql)->executeQuery();
  }

  public function count()
  {
    $sql = "select * from {$this->table}";
    return $this->executeQuery($sql)->rowCount();
  }

  public function fetch()
  {
    $sql = "select * from {$this->table}";
    return $this->executeQuery($sql)->fetchAllAssociative();
  }
}
