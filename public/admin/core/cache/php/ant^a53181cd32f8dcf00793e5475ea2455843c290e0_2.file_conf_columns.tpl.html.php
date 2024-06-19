<?php
/* Smarty version 5.1.0, created on 2024-06-02 20:49:46
  from 'file:tpl/sub/conf_columns.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665cb0bad333b2_38121169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a53181cd32f8dcf00793e5475ea2455843c290e0' => 
    array (
      0 => 'tpl/sub/conf_columns.tpl.html',
      1 => 1717349441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665cb0bad333b2_38121169 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\antCMS.os\\admin\\tpl\\sub';
?><hr>
<div id="custom_container"></div>
<hr>
<div class="d-flex align-items-center gap-4">
    <div class="form-check form-switch align-items-center" title="Снять запрет">
        <input class="form-check-input" type="checkbox" role="switch" name="switcherFieldsetToggle" id="switcherFieldsetToggle" aria-labelledby="selectConfigFieldset">
        <label class="form-check-label" for="switcherFieldsetToggle"><i class="bi bi-lock-fill text-danger"></i></label>
    </div>
    <fieldset class="w-100 d-flex flex-column flex-md-row align-items-center gap-2" id="selectConfigFieldset" disabled>
        <label for="configSelector" class="form-check-label text-nowrap">Выбрать конфигурацию <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('configSelectedIndex')), ENT_QUOTES, 'UTF-8');?>
</label>
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
"><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null)), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allTablesNames')[($_smarty_tpl->getValue('__smarty_section_tt')['index'] ?? null)]), ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
}
?>
        </select>
        <button type="button" class="btn btn-dark w-100 text-nowrap" data-operation="addNewConfig">Создать/Обновить конфиг <i class="bi bi-database-add"></i></button>
        <button type="button" class="btn btn-primary w-100 text-nowrap" data-operation="ssss">Импортировать из `*__columns.json`<i class="bi bi-edit"></i></button>
        <button type="button" class="btn btn-danger w-100 text-nowrap" data-operation="ssss">Переписать `*__columns.json` <i class="bi bi-edit"></i></button>
    </fieldset>
</div>
<hr>
--<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('btnRedirectToeEdit')), ENT_QUOTES, 'UTF-8');?>
--

<div class="table-responsive-xl mb-4">
    <table id="columnsConfiguratorTable" class="table table-striped table-bordered table-sm">
        <thead class="table-secondary">
            <tr class="ant-text-rotated align-self-center align-middle text-center">
                <td class="ant-text-no-rotated">#</td>
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
                                                            </tr>
        </thead>
        <tbody>
            <?php
$__section_row_0_loop = (is_array(@$_loop=$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('dbTableFields'))) ? count($_loop) : max(0, (int) $_loop));
$__section_row_0_total = $__section_row_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_row'] = new \Smarty\Variable(array());
if ($__section_row_0_total !== 0) {
for ($__section_row_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index'] = 0; $__section_row_0_iteration <= $__section_row_0_total; $__section_row_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_row']->value['index']++){
?>
            <tr class="ant-text-no-rotated align-items-center">
                <?php if ($_smarty_tpl->getValue('iuConfigs')) {?>
                <?php $_smarty_tpl->assign('rowData', $_smarty_tpl->getValue('iuConfigs')[($_smarty_tpl->getValue('__smarty_section_row')['index'] ?? null)], false, NULL);?>
                <?php $_smarty_tpl->assign('colData', $_smarty_tpl->getValue('rowData')['table_data'], false, NULL);?>
                <td><?php echo htmlspecialchars((string) (($_smarty_tpl->getValue('__smarty_section_row')['index'] ?? null)), ENT_QUOTES, 'UTF-8');?>
&nbsp;<sub><span class="badge text-bg-light"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['id']), ENT_QUOTES, 'UTF-8');?>
</span></sub></td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['data']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['ind']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['db']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['dt']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['title']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['visible']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['searchable']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['orderable']), ENT_QUOTES, 'UTF-8');?>
</td>
                                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['sort_order']), ENT_QUOTES, 'UTF-8');?>
</td>
                <td><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('colData')['enable']), ENT_QUOTES, 'UTF-8');?>
</td>
                                                                <?php }?>
            </tr>
            <?php
}
}
?>
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
><?php }
}
