<?php
/* Smarty version 5.1.0, created on 2024-06-02 20:49:46
  from 'file:atoms/aDivDropdownContainerSize.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665cb0bad2a899_02725054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ecc4ae02fa6dfe8a932a152934ad5fba1363c1a' => 
    array (
      0 => 'atoms/aDivDropdownContainerSize.tpl.html',
      1 => 1716303119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665cb0bad2a899_02725054 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\antCMS.os\\admin\\tpl\\atoms';
?><div class="dropdown-center dropup">
    <button class="btn btn-dark btn-sm dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_width')), ENT_QUOTES, 'UTF-8');?>

    </button>
    <ul class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allowedContainerWidths'), 'width');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('width')->value) {
$foreach0DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('container_width') == $_smarty_tpl->getValue('width')) {?>
        <li><a class="dropdown-item disabled" aria-disabled="true"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php } else { ?>
        <li><a class="dropdown-item" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
?change_template_width=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('width')), ENT_QUOTES, 'UTF-8');?>
</a></li>
        <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
