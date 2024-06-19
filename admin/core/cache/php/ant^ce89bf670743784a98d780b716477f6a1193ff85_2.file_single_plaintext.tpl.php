<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:cs/single_plaintext.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206c46e4_53596778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce89bf670743784a98d780b716477f6a1193ff85' => 
    array (
      0 => 'cs/single_plaintext.tpl',
      1 => 1718052578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d206c46e4_53596778 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\cs';
if ((null !== ($_smarty_tpl->getValue('p') ?? null)) && is_array($_smarty_tpl->getValue('p'))) {?>





<?php if ($_smarty_tpl->getValue('label')) {?>
<label for="input_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
" class="form-label<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add_label'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add_label']), ENT_QUOTES, 'UTF-8');
}?>"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('label')), ENT_QUOTES, 'UTF-8');?>
</label>
<?php }?>
<input  type="text"
 class="form-control-plaintext<?php if ((null !== ($_smarty_tpl->getValue('p')['class_add'] ?? null))) {?> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['class_add']), ENT_QUOTES, 'UTF-8');
}?>"
 <?php if ((null !== ($_smarty_tpl->getValue('p')['id'] ?? null))) {?> id="input_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['id']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
 <?php if ((null !== ($_smarty_tpl->getValue('dataset') ?? null)) && is_array($_smarty_tpl->getValue('dataset'))) {?>
 <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('dataset'), 'item', false, 'key');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('key')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach2DoElse = false;
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
 readonly
>



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
isReadonly => <?php if ((null !== ($_smarty_tpl->getValue('p')['isReadonly'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['isReadonly']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
isChecked => <?php if ((null !== ($_smarty_tpl->getValue('p')['isChecked'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['isChecked']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
isIndeterminate => <?php if ((null !== ($_smarty_tpl->getValue('p')['isIndeterminate'] ?? null))) {
echo htmlspecialchars((string) ($_smarty_tpl->getValue('p')['isIndeterminate']), ENT_QUOTES, 'UTF-8');
} else { ?>null<?php }?><br>
</pre><?php }
}
