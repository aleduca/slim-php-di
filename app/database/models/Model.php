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
    $stmt = $this->connection->prepare($sql);
    $results = $stmt->executeQuery();
    return $results->fetchAllAssociative();
  }

  private function executeQuery()
  {
    $sql = "select * from {$this->table}";
    $stmt = $this->connection->prepare($sql);
    return $stmt->executeQuery();
  }

  public function count()
  {
    return $this->executeQuery()->rowCount();
  }

  public function fetch()
  {
    return $this->executeQuery()->fetchAllAssociative();
  }
}
