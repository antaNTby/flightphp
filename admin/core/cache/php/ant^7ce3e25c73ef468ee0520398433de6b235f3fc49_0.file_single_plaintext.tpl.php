<?php
/* Smarty version 5.3.1, created on 2024-06-19 23:32:39
  from 'file:cs/single_plaintext.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66734067e8ebd2_26505745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce3e25c73ef468ee0520398433de6b235f3fc49' => 
    array (
      0 => 'cs/single_plaintext.tpl',
      1 => 1718291671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_66734067e8ebd2_26505745 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\flightphp\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {?>

<?php if ($_smarty_tpl->getValue('label')) {?>
<label for="input_<?php echo $_smarty_tpl->getValue('p')['id'];?>
" class="form-label<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add_label'] ?? null))) {?> <?php echo $_smarty_tpl->getValue('p')['class_add_label'];
}?>"><?php echo $_smarty_tpl->getValue('label');?>
</label>
<?php }?>
<input  type="text"
 class="form-control-plaintext<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo $_smarty_tpl->getValue('p')['class_add'];
}?>"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {?> id="input_<?php echo $_smarty_tpl->getValue('p')['id'];?>
"<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('p')['dataset'] ?? null)) && is_array($_smarty_tpl->getValue('p')['dataset'])) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('p')['dataset'], 'item', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach2DoElse = false;
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
 readonly
>

<?php } else { ?>
@
<?php }?>

<pre class="d-none">
class_div => <?php if ((null !== ($_smarty_tpl->getValue('p')['class_div'] ?? null))) {
echo $_smarty_tpl->getValue('p')['class_div'];
} else { ?>null<?php }?><br>
id => <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {
echo $_smarty_tpl->getValue('p')['id'];
} else { ?>null<?php }?><br>
class_add => <?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {
echo $_smarty_tpl->getValue('p')['class_add'];
} else { ?>null<?php }?><br>
name => <?php if ((null !== ($_smarty_tpl->getValue('p')['name'] ?? null))) {
echo $_smarty_tpl->getValue('p')['name'];
} else { ?>null<?php }?><br>
value => <?php if ((null !== ($_smarty_tpl->getValue('p')['value'] ?? null))) {
echo $_smarty_tpl->getValue('p')['value'];
} else { ?>null<?php }?><br>
aria_label => <?php if ((null !== ($_smarty_tpl->getValue('p')['aria_label'] ?? null))) {
echo $_smarty_tpl->getValue('p')['aria_label'];
} else { ?>null<?php }?><br>
isDisabled => <?php if ((null !== ($_smarty_tpl->getValue('p')['isDisabled'] ?? null))) {
echo $_smarty_tpl->getValue('p')['isDisabled'];
} else { ?>null<?php }?><br>
isReadonly => <?php if ((null !== ($_smarty_tpl->getValue('p')['isReadonly'] ?? null))) {
echo $_smarty_tpl->getValue('p')['isReadonly'];
} else { ?>null<?php }?><br>
isChecked => <?php if ((null !== ($_smarty_tpl->getValue('p')['isChecked'] ?? null))) {
echo $_smarty_tpl->getValue('p')['isChecked'];
} else { ?>null<?php }?><br>
isIndeterminate => <?php if ((null !== ($_smarty_tpl->getValue('p')['isIndeterminate'] ?? null))) {
echo $_smarty_tpl->getValue('p')['isIndeterminate'];
} else { ?>null<?php }?><br>
</pre><?php }
}
