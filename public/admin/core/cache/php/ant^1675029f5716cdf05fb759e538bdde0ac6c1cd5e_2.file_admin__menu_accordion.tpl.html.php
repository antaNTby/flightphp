<?php
/* Smarty version 5.1.0, created on 2024-06-02 20:49:46
  from 'file:admin__menu_accordion.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665cb0bad24555_98845906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1675029f5716cdf05fb759e538bdde0ac6c1cd5e' => 
    array (
      0 => 'admin__menu_accordion.tpl.html',
      1 => 1715934266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665cb0bad24555_98845906 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\antCMS.os\\admin\\tpl';
?><div class="accordion accordion-flush" id="DepartmentsAccordion" data-bs-theme="light">
    <?php
$__section_dpt_index_0_loop = (is_array(@$_loop=$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('Departments'))) ? count($_loop) : max(0, (int) $_loop));
$__section_dpt_index_0_total = $__section_dpt_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_dpt_index'] = new \Smarty\Variable(array());
if ($__section_dpt_index_0_total !== 0) {
for ($__section_dpt_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index'] = 0; $__section_dpt_index_0_iteration <= $__section_dpt_index_0_total; $__section_dpt_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_dpt_index']->value['index']++){
?>
    <?php $_smarty_tpl->assign('myMenu', $_smarty_tpl->getValue('Departments')[($_smarty_tpl->getValue('__smarty_section_dpt_index')['index'] ?? null)], false, NULL);?>
    <div class="accordion-item my-2">
        <h2 class="h6 accordion-header" id="heading_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['id']), ENT_QUOTES, 'UTF-8');?>
">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['id']), ENT_QUOTES, 'UTF-8');?>
" aria-expanded="<?php if ($_smarty_tpl->getValue('current_dpt') == $_smarty_tpl->getValue('myMenu')['id']) {?>true<?php } else { ?>false<?php }?>" aria-controls="collapse_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['id']), ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['name']), ENT_QUOTES, 'UTF-8');?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['id']), ENT_QUOTES, 'UTF-8');?>
</sub>
            </button>
        </h2>
        <div id="collapse_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['id']), ENT_QUOTES, 'UTF-8');?>
" class="accordion-collapse collapse<?php if ($_smarty_tpl->getValue('current_dpt') == $_smarty_tpl->getValue('myMenu')['id']) {?> show<?php }?>" aria-labelledby="heading_<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('myMenu')['id']), ENT_QUOTES, 'UTF-8');?>
" data-bs-parent="#DepartmentsAccordion">
            <div class="accordion-body">
                <div class="d-grid gap-1 col mx-auto">
                    <?php $_smarty_tpl->assign('mySubMenu', $_smarty_tpl->getValue('myMenu')['sub_departments'], false, NULL);?>
                    <?php
$__section_sub_index_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('myMenu')['sub_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_sub_index_0_total = $__section_sub_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sub_index'] = new \Smarty\Variable(array());
if ($__section_sub_index_0_total !== 0) {
for ($__section_sub_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index'] = 0; $__section_sub_index_0_iteration <= $__section_sub_index_0_total; $__section_sub_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sub_index']->value['index']++){
?>
                    <?php if ($_smarty_tpl->getValue('current_sub_id') == $_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['id']) {?>

                    <a class="btn btn-danger text-wrap text-start text-xl-center" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['sub_href']), ENT_QUOTES, 'UTF-8');?>
" role="button"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['name']), ENT_QUOTES, 'UTF-8');?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['id']), ENT_QUOTES, 'UTF-8');?>
</sub></a>

                    <?php } else { ?>

                    <a class="btn btn-light text-wrap text-start text-xl-center" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['sub_href']), ENT_QUOTES, 'UTF-8');?>
" role="button"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['name']), ENT_QUOTES, 'UTF-8');?>
 <sub class="ps-2 fw-lighter text-dark text-opacity-25"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mySubMenu')[($_smarty_tpl->getValue('__smarty_section_sub_index')['index'] ?? null)]['id']), ENT_QUOTES, 'UTF-8');?>
</sub></a>

                    <?php }?>
                    <?php
}
}
?></div>
            </div>
        </div>
    </div>
    <?php
}
}
?>
</div><?php }
}
