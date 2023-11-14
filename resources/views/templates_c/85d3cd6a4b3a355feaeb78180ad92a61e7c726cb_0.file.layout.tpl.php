<?php
/* Smarty version 4.3.4, created on 2023-11-08 11:15:04
  from 'C:\dev\slim-php-di\resources\views\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654b6db8c06ff1_34933662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85d3cd6a4b3a355feaeb78180ad92a61e7c726cb' => 
    array (
      0 => 'C:\\dev\\slim-php-di\\resources\\views\\layout.tpl',
      1 => 1699442078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_654b6db8c06ff1_34933662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_714875486654b6db8bfe036_64775655', 'title');
?>
</title>
  <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css
    integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Raleway:wght@100;400;600&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_508768601654b6db8bffb90_05191475', 'css');
?>

</head>

<body>
  <?php $_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1770864320654b6db8c04a74_27377876', 'body');
?>

    <?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  </div>

  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
</body>

</html><?php }
/* {block 'title'} */
class Block_714875486654b6db8bfe036_64775655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_714875486654b6db8bfe036_64775655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Slim Framework<?php
}
}
/* {/block 'title'} */
/* {block 'css'} */
class Block_508768601654b6db8bffb90_05191475 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_508768601654b6db8bffb90_05191475',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'css'} */
/* {block 'body'} */
class Block_1770864320654b6db8c04a74_27377876 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1770864320654b6db8c04a74_27377876',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
