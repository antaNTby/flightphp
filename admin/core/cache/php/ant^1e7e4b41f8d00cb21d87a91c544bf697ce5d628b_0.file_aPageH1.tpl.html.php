<?php
/* Smarty version 5.3.1, created on 2024-06-19 23:54:18
  from 'file:atoms/aPageH1.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_6673457a870ff6_86505196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e7e4b41f8d00cb21d87a91c544bf697ce5d628b' => 
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
function content_6673457a870ff6_86505196 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\flightphp\\admin\\tpl\\atoms';
?><h1 class="h4 fw-lighter text-body" data-id="PageH1">
    <?php echo $_smarty_tpl->getValue('current_sub_name');?>
 <sub><?php echo $_smarty_tpl->getValue('current_dpt_name');?>
</sub>
</h1><?php }
}
