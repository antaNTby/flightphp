<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:cs/single_checkbox.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206dd882_98558533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da7011aefce27c932763eaed48c74ce8d96f0de3' => 
    array (
      0 => 'cs/single_checkbox.tpl',
      1 => 1718052578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d206dd882_98558533 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {
if ((null !== ($_smarty_tpl->getValue('label') ?? null))) {?>
  <?php if ($_smarty_tpl->getValue('toggle')) {?>
<div class="form-check form-switch<?php if ((null !== ($_smarty_tpl->getValue('p')['class_div'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_div']), ENT_QUOTES, 'UTF-8');
}?>">
  <?php } else { ?>
<div class="form-check<?php if ((null !== ($_smarty_tpl->getValue('p')['class_div'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_div']), ENT_QUOTES, 'UTF-8');
}?>">
  <?php }
} else { ?>
<div<?php if ((null !== ($_smarty_tpl->getValue('p')['class_div'] ?? null))) {?> class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_div']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
<?php }?>
  <input type="checkbox"<?php if ($_smarty_tpl->getValue('toggle')) {?> role="switch"<?php }?>
  class="form-check-input<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add']), ENT_QUOTES, 'UTF-8');
}
if ((null !== ($_smarty_tpl->getValue('p')['isIndeterminate'] ?? null)) && $_smarty_tpl->getValue('p')['isIndeterminate'] == 1) {?> indeterminate<?php }?>"
  <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {?> id="checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
  <?php if ((null !== ($_smarty_tpl->getValue('p')['name'] ?? null))) {?> name="checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['name']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
  <?php if ((null !== ($_smarty_tpl->getValue('p')['value'] ?? null))) {?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['value']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>

 <?php if ((null !== ($_smarty_tpl->getValue('dataset') ?? null)) && is_array($_smarty_tpl->getValue('dataset'))) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dataset'), 'item', false, 'key');
$foreach5DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach5DoElse = false;
?>
 data-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('key')), ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('item')), ENT_QUOTES, 'UTF-8');?>
"
 <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
 <?php }?>

  <?php if ((null !== ($_smarty_tpl->getValue('p')['value'] ?? null))) {?> value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['value']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
  aria-label="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['name']), ENT_QUOTES, 'UTF-8');?>
"
  <?php if ((null !== ($_smarty_tpl->getValue('p')['isDisabled'] ?? null)) && $_smarty_tpl->getValue('p')['isDisabled'] == 1) {?> disabled<?php }?>
  <?php if ((null !== ($_smarty_tpl->getValue('p')['isChecked'] ?? null)) && $_smarty_tpl->getValue('p')['isChecked'] == 1) {?> checked<?php }?>>
<?php if ($_smarty_tpl->getValue('label')) {?><label class="form-check-label text-nowrap<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add_label'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add_label']), ENT_QUOTES, 'UTF-8');
}?>" for="checkbox_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
">&nbsp;<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label')), ENT_QUOTES, 'UTF-8');?>
</label> <?php }?>
</div>
<?php } else { ?>
@
<?php }?>

<pre class="d-none">
class_div => <?php if ((null !== ($_smarty_tpl->getValue('p')['class_div'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_div']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
id => <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
class_add => <?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
name => <?php if ((null !== ($_smarty_tpl->getValue('p')['name'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['name']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
value => <?php if ((null !== ($_smarty_tpl->getValue('p')['value'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['value']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
aria_label => <?php if ((null !== ($_smarty_tpl->getValue('p')['aria_label'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['aria_label']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
isDisabled => <?php if ((null !== ($_smarty_tpl->getValue('p')['isDisabled'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['isDisabled']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
isChecked => <?php if ((null !== ($_smarty_tpl->getValue('p')['isChecked'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['isChecked']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
isIndeterminate => <?php if ((null !== ($_smarty_tpl->getValue('p')['isIndeterminate'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['isIndeterminate']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
</pre><?php }
}
