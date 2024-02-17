<?php $this->layout('layout', ['title' => 'Lista de Users']); ?>
<ul class="list-group">
  <?php foreach ($posts as $post) : ?>
    <li class="list-group-item"><?php echo $post['title'] ?></li>
  <?php endforeach ?>
</ul>

<?= $links ?>