<?php $this->layout('layout', ['title' => 'Lista de Users']); ?>
  <ul class="list-group">
    <?php foreach($users as $user): ?>
      <li class="list-group-item"><?php echo $user['firstName'] ?></li>
    <?php endforeach ?>
  </ul>
