<?php
/* Smarty version 4.3.4, created on 2023-11-07 17:17:14
  from 'C:\dev\slim-php-di\resources\views\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654a711acddac0_89229512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a753437fea09927b82baa2ab61b12ac0ae8a197' => 
    array (
      0 => 'C:\\dev\\slim-php-di\\resources\\views\\users.tpl',
      1 => 1699377403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654a711acddac0_89229512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_948513868654a711acd2e48_85021256', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1076941415654a711acd4917_33686105', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_948513868654a711acd2e48_85021256 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_948513868654a711acd2e48_85021256',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Users Slim Framework
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_1076941415654a711acd4917_33686105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1076941415654a711acd4917_33686105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
      <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['user']->value['firstName'];?>
</li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </ul>
<?php
}
}
/* {/block 'body'} */
}
