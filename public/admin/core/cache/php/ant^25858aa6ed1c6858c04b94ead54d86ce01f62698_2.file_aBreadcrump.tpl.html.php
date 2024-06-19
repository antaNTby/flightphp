<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:atoms/aBreadcrump.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206aedf6_89500248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25858aa6ed1c6858c04b94ead54d86ce01f62698' => 
    array (
      0 => 'atoms/aBreadcrump.tpl.html',
      1 => 1716303119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d206aedf6_89500248 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\atoms';
?><nav class="my-1 d-flex flex-column-inverse flex-md-row-inverse justify-content-start justify-content-md-end" style="--bs-breadcrumb-divider: '::'" aria-label="breadcrumb">
    <ol class="my-0 px-1 breadcrumb text-small lh-1">
        <li class="breadcrumb-item"><a class="text-decoration-none" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
"><i class="bi bi-house-gear"></i></a></li>
        <li class="breadcrumb-item"><a href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('current_dpt_name')), ENT_QUOTES, 'UTF-8');?>
</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('current_sub_name')), ENT_QUOTES, 'UTF-8');?>
</li>
    </ol>
</nav><?php }
}
