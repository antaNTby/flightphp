<?php
/* Smarty version 5.3.1, created on 2024-06-19 23:33:20
  from 'file:sub/default_sub.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.3.1',
  'unifunc' => 'content_66734090a957b1_44405176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61db8e9cf91cf682b7e9effb0ca41e5729853777' => 
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
function content_66734090a957b1_44405176 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\flightphp\\admin\\tpl\\sub';
?>
<div class="table-responsive-md mb-4">
<table id="defaultDataTable_<?php echo $_smarty_tpl->getValue('current_sub_id');?>
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
        <input type="text" id="jsonFN" value="<?php echo $_smarty_tpl->getValue('columnsJsonFileName');?>
">
        <button class="btn btn-success btn-lg" id="btnSubmit" name="btnSubmit">save</button>
    </form>
</div>
<?php echo '<script'; ?>
 src="/admin/js/dt/standartDataTable.js" type="module"><?php echo '</script'; ?>
><?php }
}
