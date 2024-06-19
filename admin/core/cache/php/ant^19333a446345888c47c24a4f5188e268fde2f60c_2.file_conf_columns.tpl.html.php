<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:tpl/sub/conf_columns.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d206a9e60_40109707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19333a446345888c47c24a4f5188e268fde2f60c' => 
    array (
      0 => 'tpl/sub/conf_columns.tpl.html',
      1 => 1718224315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:atoms/aBreadcrump.tpl.html' => 1,
    'file:atoms/aPageH1.tpl.html' => 1,
    'file:cs/single_badge.tpl' => 1,
    'file:cs/single_plaintext.tpl' => 2,
    'file:cs/single_inputtext.tpl' => 4,
    'file:cs/single_checkbox.tpl' => 4,
    'file:cs/single_inputnumber.tpl' => 1,
    'file:atoms/aEmptyTableBodyWithPlaceholders.tpl.html' => 1,
  ),
))) {
function content_666a0d206a9e60_40109707 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl\\sub';
$_smarty_tpl->renderSubTemplate("file:atoms/aBreadcrump.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
$_smarty_tpl->renderSubTemplate("file:atoms/aPageH1.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
<div class="d-flex align-items-center gap-4">
    <div class="w-50 d-flex flex-column flex-md-row align-items-center gap-2">
        <label for="configSelector" class="form-check-label text-nowrap">Выбрать конфигурацию</label>
        <select name="configSelector" id="configSelector" class="form-select">
            <?php
$__section_tt_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('allTablesNames')) ? count($_loop) : max(0, (int) $_loop));
$__section_tt_0_total = $__section_tt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tt'] = new \Smarty\Variable(array());
if ($__section_tt_0_total !== 0) {
for ($__section_tt_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tt']->value['index'] = 0; $__section_tt_0_iteration <= $__section_tt_0_total; $__section_tt_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tt']->value['index']++){
?>
            <?php if (($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null) == $_smarty_tpl->getValue('configSelectedIndex')) {?>
            <?php $_smarty_tpl->assign('isSelected', "selected=selected", false, NULL);
} else {
$_smarty_tpl->assign('isSelected', '', false, NULL);?>
            <?php }?>
            <option <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('isSelected')), ENT_QUOTES, 'UTF-8');?>
 value="<?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null)), ENT_QUOTES, 'UTF-8');?>
" data-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allTablesNames')[($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null)]), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null)), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allTablesNames')[($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null)]), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
?>
        </select>
        <div class="form-check form-switch align-items-center" title="Снять запрет">
            <input class="form-check-input" type="checkbox" role="switch" name="switcherFieldsetToggle" id="switcherFieldsetToggle" aria-labelledby="selectConfigFieldset">
            <label class="form-check-label" for="switcherFieldsetToggle"><i class="bi bi-lock-fill text-danger"></i></label>
        </div>
    </div>
    <fieldset class="w-50 d-flex flex-column flex-md-row align-items-center gap-2" id="selectConfigFieldset" disabled>
        <button type="button" class="btn btn-danger w-100 text-nowrap" data-operation="addNewConfig">Создать(обнулить) конфиг <i class="bi bi-database-add"></i></button>
        <button type="button" class="btn btn-primary w-100 text-nowrap" data-operation="ssss">Импортировать из `*__columns.json`<i class="bi bi-edit"></i></button>
        <button type="button" class="btn btn-danger w-100 text-nowrap" data-operation="ssss">Переписать `*__columns.json` <i class="bi bi-edit"></i></button>
    </fieldset>
</div>
<hr>
<div class="table-responsive-xl mb-4">
    <?php $_smarty_tpl->assign('countTD', 12, false, NULL);?>
    <table id="columnsConfiguratorTable" class="table table-hover">
        <thead class="table-secondary">
            <tr class="align-self-center align-middle text-center">
                <th>\</th>
                <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('countTD')) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new \Smarty\Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($__section_cnt_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_0_iteration <= $__section_cnt_0_total; $__section_cnt_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                <th><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_section_cnt')['index'] ?? null)), ENT_QUOTES, 'UTF-8');?>
</th>
                <?php
}
}
?>
            </tr>
            <tr class="ant-text-rotated align-self-center align-middle text-center">
                <td class="ant-text-no-rotated">#</td>
                <th>id</th>
                <th>data</th>
                <td>ind</td>
                <td>db</td>
                <td>dt</td>
                <th class="ant-text-no-rotated">title</th>
                <td>visible</td>
                <td>searchable</td>
                <td>orderable</td>
                                <td>sort order</td>
                <th>enable</th>
                                                <td class="ant-text-no-rotated">input_type</td>
            </tr>
        </thead>
        <tbody>
            <?php $_smarty_tpl->assign('FieldsCount', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('dbTableFields')), false, NULL);?>
            <?php if ($_smarty_tpl->getValue('Configurations')) {?>
            <?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('FieldsCount')) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new \Smarty\Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?>
            <?php $_smarty_tpl->assign('rowData', $_smarty_tpl->getValue('Configurations')[($_smarty_tpl->getValue('__smarty_section_row')['index'] ?? null)], false, NULL);?>

            <?php $_smarty_tpl->assign('values', $_smarty_tpl->getValue('rowData')['fieldValues'], false, NULL);?>
            <?php $_smarty_tpl->assign('p', $_smarty_tpl->getValue('rowData')['fieldParams'], false, NULL);?>

            <?php $_smarty_tpl->assign('options', $_smarty_tpl->getValue('rowData')['fieldOptions'], false, NULL);?>

            <?php $_smarty_tpl->assign('attributes', $_smarty_tpl->getValue('rowData')['fieldAttributes'], false, NULL);?>
            <tr class="align-items-center">
                <td class="align-middle"><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_section_row')['index'] ?? null)), ENT_QUOTES, 'UTF-8');?>
</td>
                <td class="align-middle"  data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['id']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_badge.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->getValue('values')['id'],'dataset'=>$_smarty_tpl->getValue('attributes')['id']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['data']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_plaintext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['data'],'dataset'=>$_smarty_tpl->getValue('attributes')['data']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['ind']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_plaintext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['ind'],'dataset'=>$_smarty_tpl->getValue('attributes')['ind']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['db']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_inputtext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['db'],'options'=>$_smarty_tpl->getValue('options')['db'],'dataset'=>$_smarty_tpl->getValue('attributes')['db']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['dt']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_inputtext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['dt'],'options'=>$_smarty_tpl->getValue('options')['dt'],'dataset'=>$_smarty_tpl->getValue('attributes')['dt']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['title']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_inputtext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['title'],'dataset'=>$_smarty_tpl->getValue('attributes')['title']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['visible']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['visible'],'dataset'=>$_smarty_tpl->getValue('attributes')['visible']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['searchable']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['searchable'],'dataset'=>$_smarty_tpl->getValue('attributes')['searchable']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['orderable']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['orderable'],'dataset'=>$_smarty_tpl->getValue('attributes')['orderable']), (int) 0, $_smarty_current_dir);
?></td>
                                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['sort_order']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_inputnumber.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['sort_order'],'dataset'=>$_smarty_tpl->getValue('attributes')['sort_order']), (int) 0, $_smarty_current_dir);
?></td>
                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['enable']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_checkbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['enable'],'dataset'=>$_smarty_tpl->getValue('attributes')['enable'],'label'=>'','toggle'=>true), (int) 0, $_smarty_current_dir);
?></td>
                                                <td class="align-middle" data-old-value="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('values')['input_type']), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->renderSubTemplate("file:cs/single_inputtext.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('p'=>$_smarty_tpl->getValue('p')['input_type'],'dataset'=>$_smarty_tpl->getValue('attributes')['input_type']), (int) 0, $_smarty_current_dir);
?></td>
            </tr>
            <?php
}
}
?>
            <?php } else { ?>
            <?php $_smarty_tpl->renderSubTemplate("file:atoms/aEmptyTableBodyWithPlaceholders.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('progressPercent'=>"50",'countTD'=>(($tmp = $_smarty_tpl->getValue('countTD') ?? null)===null||$tmp==='' ? 11 ?? null : $tmp)), (int) 0, $_smarty_current_dir);
?>
            <?php }?>
        </tbody>
        <tfoot class="table-dark">
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
 src="/admin/js/ui/sub/conf_columns.js" type="module"><?php echo '</script'; ?>
>
<?php }
}
