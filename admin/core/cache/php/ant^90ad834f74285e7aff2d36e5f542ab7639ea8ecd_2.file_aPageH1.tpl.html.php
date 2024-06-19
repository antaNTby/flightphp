<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:atoms/aPageH1.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206b2305_98424381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90ad834f74285e7aff2d36e5f542ab7639ea8ecd' => 
    array (
      0 => 'atoms/aPageH1.tpl.html',
      1 => 1716179954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d206b2305_98424381 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\atoms';
?><h1 class="h4 fw-lighter text-body" data-id="PageH1">
    <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('current_sub_name')), ENT_QUOTES, 'UTF-8');?>
 <sub><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('current_dpt_name')), ENT_QUOTES, 'UTF-8');?>
</sub>
</h1><?php }
}
