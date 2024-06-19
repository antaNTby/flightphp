<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:cs/single_badge.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206b9605_21866501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8473bb1869761ea4df6c8d40fa5adf0a9d1dd64' => 
    array (
      0 => 'cs/single_badge.tpl',
      1 => 1718202788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d206b9605_21866501 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {?>



<span class="badge text-bg-secondary<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add']), ENT_QUOTES, 'UTF-8');
}?>"
 <?php if ((null !== ($_smarty_tpl->getValue('dataset') ?? null)) && is_array($_smarty_tpl->getValue('dataset'))) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dataset'), 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
 data-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')), ENT_QUOTES, 'UTF-8');?>
"
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
 <?php }?>>
<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('content')), ENT_QUOTES, 'UTF-8');?>

</span>

<?php } else { ?>
@
<?php }?>

<?php }
}
