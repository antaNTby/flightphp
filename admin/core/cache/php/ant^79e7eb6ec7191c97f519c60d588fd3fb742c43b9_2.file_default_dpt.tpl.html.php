<?php
/* Smarty version 5.1.0, created on 2024-06-05 08:59:57
  from 'file:default_dpt.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665ffeddefda83_59817272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79e7eb6ec7191c97f519c60d588fd3fb742c43b9' => 
    array (
      0 => 'default_dpt.tpl.html',
      1 => 1716179954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:atoms/aBreadcrump.tpl.html' => 1,
    'file:atoms/aPageH1.tpl.html' => 1,
    'file:sub/default_sub.tpl.html' => 1,
  ),
))) {
function content_665ffeddefda83_59817272 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl';
$_smarty_tpl->renderSubTemplate("file:atoms/aBreadcrump.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:atoms/aPageH1.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>



<?php $_smarty_tpl->renderSubTemplate("file:sub/default_sub.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
if ($_smarty_tpl->getValue('page_message') != '') {?>
<hr>
<div class="alert alert-<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page_message_type')), ENT_QUOTES, 'UTF-8');?>
 alert-dismissible fade show" role="alert">
  <strong><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('admin_page')), ENT_QUOTES, 'UTF-8');?>
 !</strong> <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('page_message')), ENT_QUOTES, 'UTF-8');?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php }?>

<?php }
}
