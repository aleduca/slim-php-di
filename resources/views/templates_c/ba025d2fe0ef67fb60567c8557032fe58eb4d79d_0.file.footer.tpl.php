<?php
/* Smarty version 4.3.4, created on 2023-11-08 11:14:20
  from 'C:\dev\slim-php-di\resources\views\partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_654b6d8c569f79_22850909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba025d2fe0ef67fb60567c8557032fe58eb4d79d' => 
    array (
      0 => 'C:\\dev\\slim-php-di\\resources\\views\\partials\\footer.tpl',
      1 => 1699442045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_654b6d8c569f79_22850909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\dev\\slim-php-di\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  <div class="col-md-4 d-flex align-items-center">
    <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
      Slim Framework
    </a>
    <span class="text-muted">© <?php echo smarty_modifier_date_format(time(),'Y');?>
 Company, Inc</span>
  </div>

  <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
          <use xlink:href="#twitter"></use>
        </svg></a></li>
    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
          <use xlink:href="#instagram"></use>
        </svg></a></li>
    <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24">
          <use xlink:href="#facebook"></use>
        </svg></a></li>
  </ul>
</footer><?php }
}
