<?php
/* Smarty version 5.3.1, created on 2024-06-17 08:45:08
  from 'file:cs/single_inputtext.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_666fcd64a449d4_32803699',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4074300af1fae8389ed4a54ad8e04b9f10c34369' => 
    array (
      0 => 'cs/single_inputtext.tpl',
      1 => 1718291671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666fcd64a449d4_32803699 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {?>

<?php if ($_smarty_tpl->getValue('label')) {?>
<label for="input_<?php echo $_smarty_tpl->getValue('p')['id'];?>
" class="form-label<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add_label'] ?? null))) {?> <?php echo $_smarty_tpl->getValue('p')['class_add_label'];
}?>"><?php echo $_smarty_tpl->getValue('label');?>
</label>
<?php }?>
<input  type="text"
 class="form-control bg-white<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo $_smarty_tpl->getValue('p')['class_add'];
}?>"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {?> id="input_<?php echo $_smarty_tpl->getValue('p')['id'];?>
"<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('datalist') ?? null)) && is_array($_smarty_tpl->getValue('datalist'))) {?> list="datalistdatalist_<?php echo $_smarty_tpl->getValue('p')['id'];?>
"<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('p')['dataset'] ?? null)) && is_array($_smarty_tpl->getValue('p')['dataset'])) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p')['dataset'], 'item', false, 'key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach3DoElse = false;
?>
 data-<?php echo $_smarty_tpl->getValue('key');?>
="<?php echo $_smarty_tpl->getValue('item');?>
"
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
 <?php }?>
 value="<?php echo $_smarty_tpl->getValue('p')['value'];?>
"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['isDisabled'] ?? null)) && $_smarty_tpl->getValue('p')['isDisabled'] == 1) {?> disabled<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('p')['isReadonly'] ?? null)) && $_smarty_tpl->getValue('p')['isReadonly'] == 1) {?> readonly<?php }?>

 placeholder="Type<?php if ((null !== ($_smarty_tpl->getValue('datalist') ?? null)) && is_array($_smarty_tpl->getValue('datalist'))) {?> | Select<?php }?> ...">

<datalist id="datalistdatalist_<?php echo $_smarty_tpl->getValue('p')['id'];?>
">
  <option value="#formatter">
  <option value="#null">
  <option value="#custom">
  <option class="dropdown-divider">
    <?php if ((null !== ($_smarty_tpl->getValue('datalist') ?? null)) && is_array($_smarty_tpl->getValue('datalist'))) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('datalist'), 'item', false, 'key');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
    <option value="<?php echo $_smarty_tpl->getValue('item');?>
">
    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    <?php }?>
</datalist>

<?php } else { ?>
@
<?php }
}
}
