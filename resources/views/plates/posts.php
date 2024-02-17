<?php $this->layout('layout', ['title' => 'Lista de Users']); ?>
<ul class="list-group">
  <?php foreach ($posts as $post) : ?>
    <li class="list-group-item">
      <?php echo $post['title'] ?>
      <b><i><small>Criado por: <?= $post['firstName'] ?> <?= $post['lastName'] ?></small></i></b>
    </li>
  <?php endforeach ?>
</ul>

<?= $links ?>