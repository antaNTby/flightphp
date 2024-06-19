<?php
/* Smarty version 5.1.0, created on 2024-06-05 08:59:57
  from 'file:sub/default_sub.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665ffeddf05c80_37962416',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c7deb5262c8d71cf370d060f7ec0bbeb90f3c71' => 
    array (
      0 => 'sub/default_sub.tpl.html',
      1 => 1717444900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665ffeddf05c80_37962416 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\sub';
?>
<div class="table-responsive-md mb-4">
<table id="defaultDataTable_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('current_sub_id')), ENT_QUOTES, 'UTF-8');?>
" class="table table-striped table-bordered table-sm" style="width:100%">
    <thead class="table-danger">
    </thead>
    <tbody>
    </tbody>
    <tfoot class="p-0">
        <th></th>
    </tfoot>
</table>
</div>
<div class="shadow p-3 mb-5 mt-3 bg-body-tertiary rounded border border-1">
    <form class="p-3" action="save_defaultForm1">
        <input type="text" id="jsonFN" value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('columnsJsonFileName')), ENT_QUOTES, 'UTF-8');?>
">
        <button class="btn btn-success btn-lg" id="btnSubmit" name="btnSubmit">save</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="/admin/js/dt/standartDataTable.js" type="module"><?php echo '</script'; ?>
><?php }
}
