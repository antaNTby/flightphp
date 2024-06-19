<?php
/* Smarty version 5.3.1, created on 2024-06-19 23:54:16
  from 'file:cs/single_badge.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66734578c93aa8_74274540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02eb2ad799c20df2441e71cf1c80e5cc98cedeb3' => 
    array (
      0 => 'cs/single_badge.tpl',
      1 => 1718291671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66734578c93aa8_74274540 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\flightphp\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {?>

<span class="badge text-bg-secondary<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo $_smarty_tpl->getValue('p')['class_add'];
}?>"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['dataset'] ?? null)) && is_array($_smarty_tpl->getValue('p')['dataset'])) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p')['dataset'], 'item', false, 'key');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
?>
 data-<?php echo $_smarty_tpl->getValue('key');?>
="<?php echo $_smarty_tpl->getValue('item');?>
"
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
 <?php }?>>
<?php echo $_smarty_tpl->getValue('content');?>

</span>

<?php } else { ?>
@
<?php }?>

<?php }
}
