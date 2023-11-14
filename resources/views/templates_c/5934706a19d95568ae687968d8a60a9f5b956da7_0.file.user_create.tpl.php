<?php
/* Smarty version 4.3.4, created on 2023-11-14 16:01:45
  from 'C:\dev\slim-php-di\resources\views\user_create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655399e92b19b6_22222812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5934706a19d95568ae687968d8a60a9f5b956da7' => 
    array (
      0 => 'C:\\dev\\slim-php-di\\resources\\views\\user_create.tpl',
      1 => 1699977695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655399e92b19b6_22222812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1484945121655399e91d3b40_26601911', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_714376829655399e91d5ff4_68321748', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_1484945121655399e91d3b40_26601911 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1484945121655399e91d3b40_26601911',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  User Create
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_714376829655399e91d5ff4_68321748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_714376829655399e91d5ff4_68321748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>
    <div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
</div>
  <?php }?>
  <form method="post" action="/register">
    <div class="mb-3">
      <?php if ((isset($_smarty_tpl->tpl_vars['validate']->value) && isset($_smarty_tpl->tpl_vars['validate']->value['firstName']))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['validate']->value['firstName'];?>
</div>
      <?php }?>
      <label class="form-label">First Name</label>
      <input type="text" class="form-control" name="firstName" value="Alexandre">
    </div>
    <div class="mb-3">
      <?php if ((isset($_smarty_tpl->tpl_vars['validate']->value) && isset($_smarty_tpl->tpl_vars['validate']->value['lastName']))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['validate']->value['lastName'];?>
</div>
      <?php }?>
      <label class="form-label">Last Name</label>
      <input type="text" class="form-control" name="lastName" value="Cardoso">
    </div>
    <div class="mb-3">
      <?php if ((isset($_smarty_tpl->tpl_vars['validate']->value) && isset($_smarty_tpl->tpl_vars['validate']->value['email']))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['validate']->value['email'];?>
</div>
      <?php }?>
      <label class="form-label">Email</label>
      <input type="text" class="form-control" name="email" value="xandecar@hotmail.com">
    </div>
    <div class="mb-3">
      <?php if ((isset($_smarty_tpl->tpl_vars['validate']->value) && isset($_smarty_tpl->tpl_vars['validate']->value['password']))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['validate']->value['password'];?>
</div>
      <?php }?>
      <label class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="123456">
    </div>
    <div class="mb-3">
      <?php if ((isset($_smarty_tpl->tpl_vars['validate']->value) && isset($_smarty_tpl->tpl_vars['validate']->value['confirm_password']))) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['validate']->value['confirm_password'];?>
</div>
      <?php }?>
      <label class="form-label">Confirm Password</label>
      <input type="text" class="form-control" name="confirm_password" value="123456">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
<?php
}
}
/* {/block 'body'} */
}
