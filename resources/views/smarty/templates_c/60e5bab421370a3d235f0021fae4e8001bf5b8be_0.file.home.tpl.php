<?php
/* Smarty version 4.3.4, created on 2023-11-15 18:41:36
  from 'C:\dev\slim-php-di\resources\views\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_655510e005bff1_84226387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60e5bab421370a3d235f0021fae4e8001bf5b8be' => 
    array (
      0 => 'C:\\dev\\slim-php-di\\resources\\views\\home.tpl',
      1 => 1700073694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_655510e005bff1_84226387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1162433474655510e0059580_52969506', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_715533473655510e005b010_37406513', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'title'} */
class Block_1162433474655510e0059580_52969506 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1162433474655510e0059580_52969506',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  Home Slim Framework
<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_715533473655510e005b010_37406513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_715533473655510e005b010_37406513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut sit officia sed atque minus molestias, itaque
    obcaecati distinctio nemo voluptate excepturi, nihil quibusdam blanditiis tempora eaque. Harum, similique eos!
  </p>
<?php
}
}
/* {/block 'body'} */
}
