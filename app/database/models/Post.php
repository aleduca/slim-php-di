<?php

namespace app\database\models;

use Override;

class Post extends Model
{
  protected string $table = 'posts';

  #[Override]
  public function paginate(
    int $limit = 5,
    int $offset = 0
  ) {
    $sql = "select posts.id, posts.title,users.firstName,users.lastName from {$this->table}
     inner join users on posts.user_id = users.id
     LIMIT {$limit} OFFSET {$offset}";
    return $this->executeQuery($sql)->fetchAllAssociative();
  }

  #[Override]
  public function count()
  {
    $sql = "select * from {$this->table} inner join users on posts.user_id = users.id";
    return $this->executeQuery($sql)->rowCount();
  }
}
