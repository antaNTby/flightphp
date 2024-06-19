<?php
/* Smarty version 5.3.1, created on 2024-06-19 19:33:58
  from 'file:atoms/aDivDropdownContainerSize.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_667308769f3010_63625225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeed6ce633470f28d37a1b81e40dd75ac27f6d52' => 
    array (
      0 => 'atoms/aDivDropdownContainerSize.tpl.html',
      1 => 1716183782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_667308769f3010_63625225 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\flightphp\\public\\templates\\atoms';
?><div class="dropdown-center dropup">
    <button class="btn btn-dark btn-sm dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo $_smarty_tpl->getValue('container_width');?>

    </button>
    <ul class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allowedContainerWidths'), 'width');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('width')->value) {
$foreach0DoElse = false;
?>
        <?php if ($_smarty_tpl->getValue('container_width') == $_smarty_tpl->getValue('width')) {?>
        <li><a class="dropdown-item disabled" aria-disabled="true"><?php echo $_smarty_tpl->getValue('width');?>
</a></li>
        <?php } else { ?>
        <li><a class="dropdown-item" href="<?php echo (defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null);?>
?change_template_width=<?php echo $_smarty_tpl->getValue('width');?>
"><?php echo $_smarty_tpl->getValue('width');?>
</a></li>
        <?php }?>
        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
    </ul>
</div><?php }
}
