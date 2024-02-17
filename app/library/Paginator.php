<?php

namespace app\library;

use app\database\models\Model;

class Paginator
{

  protected int $currentPage;
  protected int $offset;

  public function __construct(
    private Model $model,
    private int $itemsPerPage = 10,
    private int $linksPerPage = 3,
  ) {
    $this->currentPage = $_GET['page'] ?? 1;
    $this->offset = ($this->currentPage - 1) * $this->itemsPerPage;
  }

  protected function totalPages()
  {
    return ceil($this->model->count() / $this->itemsPerPage);
  }

  public function items()
  {
    return $this->model->paginate($this->itemsPerPage, $this->offset);
  }

  public function links()
  {
    $totalPages = $this->totalPages();
    $startPage = max(1, $this->currentPage - $this->linksPerPage);
    $endPage = min($totalPages, $this->currentPage + $this->linksPerPage);

    $links = '<ul class="pagination mt-3">';

    if ($this->currentPage > 1) {
      $links .= '<li class="page-item"><a href="?page=1" class="page-link">First</a></li>';
    }

    for ($i = $startPage; $i <= $endPage; $i++) {
      $links .= '<li';
      if ($i == $this->currentPage) {
        $links .= ' class="active page-item"';
      }
      $links .= '><a href="?page=' . $i . '" class="page-link">' . $i . '</a></li>';
    }

    if ($this->currentPage < $totalPages) {
      $links .= '<li class="page-item"><a href="?page=' . $totalPages . '" class="page-link">Last</a></li>';
    }

    $links .= '</ul>';

    return $links;
  }
}
