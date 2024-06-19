<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:cs/single_inputtext.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206cd812_91835502',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4074300af1fae8389ed4a54ad8e04b9f10c34369' => 
    array (
      0 => 'cs/single_inputtext.tpl',
      1 => 1718226204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d206cd812_91835502 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {?>





<?php if ($_smarty_tpl->getValue('label')) {?>
<label for="input_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
" class="form-label<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add_label'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add_label']), ENT_QUOTES, 'UTF-8');
}?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label')), ENT_QUOTES, 'UTF-8');?>
</label>
<?php }?>
<input  type="text"
 class="form-control bg-white<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add']), ENT_QUOTES, 'UTF-8');
}?>"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {?> id="input_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('options') ?? null)) && is_array($_smarty_tpl->getValue('options'))) {?> list="datalistOptions_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('dataset') ?? null)) && is_array($_smarty_tpl->getValue('dataset'))) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dataset'), 'item', false, 'key');
$foreach3DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach3DoElse = false;
?>
 data-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')), ENT_QUOTES, 'UTF-8');?>
"
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
 <?php }?>
 value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['value']), ENT_QUOTES, 'UTF-8');?>
"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['isDisabled'] ?? null)) && $_smarty_tpl->getValue('p')['isDisabled'] == 1) {?> disabled<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('p')['isReadonly'] ?? null)) && $_smarty_tpl->getValue('p')['isReadonly'] == 1) {?> readonly<?php }?>

 placeholder="Type<?php if ((null !== ($_smarty_tpl->getValue('options') ?? null)) && is_array($_smarty_tpl->getValue('options'))) {?> | Select<?php }?> ...">

<datalist id="datalistOptions_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
">
  <option value="#formatter"></option>
  <option value="#null"></option>
  <option value="#custom"></option>

    <?php if ((null !== ($_smarty_tpl->getValue('options') ?? null)) && is_array($_smarty_tpl->getValue('options'))) {?>
    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('options'), 'item', false, 'key');
$foreach4DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach4DoElse = false;
?>
    <option value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
</option>
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
