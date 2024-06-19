<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:admin__menu_offcanvas.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d20683a33_12601793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20865f38f04f774b6f36455e3a9aaaae96ed89d3' => 
    array (
      0 => 'admin__menu_offcanvas.tpl.html',
      1 => 1717350043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin__menu_accordion.tpl.html' => 1,
    'file:atoms/aDivDropdownContainerSize.tpl.html' => 1,
  ),
))) {
function content_666a0d20683a33_12601793 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl';
if ($_smarty_tpl->getValue('show_offcanvas_menu_on_load')) {
$_smarty_tpl->assign('show', " show", false, NULL);
}?>
<div class="offcanvas offcanvas-start<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('show')), ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" id="offcanvasMenu" data-bs-scroll="true" data-bs-backdrop="false" aria-labelledby="offcanvasMenuLabel" data-bs-theme="dark">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasMenuLabel">Меню <?php echo htmlspecialchars((string) ((defined('SITE_URL') ? constant('SITE_URL') : null)), ENT_QUOTES, 'UTF-8');?>
 [Ctrl+Alt+M]</h5>
        <button class="btn btn-danger btn-sm bg-opacity-75 ms-4 me-1" name="arrowUp"><i class="bi bi-chevron-double-up" title="[Ctrl+Alt+Up/Down]"></i></button>
        <button class="btn btn-primary btn-sm bg-opacity-75 ms-1 me-4" name="arrowDown"><i class="bi bi-chevron-double-down" title="[Ctrl+Alt+Up/Down]"></i></button>
        <button type="button" class="btn-close" id="btnCloseMenu" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-flex flex-column justify-content-between">
        <?php $_smarty_tpl->renderSubTemplate("file:admin__menu_accordion.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
            <hr>
        <div class="d-flex flex-column justify-content-between p-3 rounded-1 bg-dark" id="uiControl">
            <div class="d-flex justify-content-center">
                <a class="px-2 nav-link text-nowrap" aria-current="page" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
"><i class="bi bi-house-gear"></i> Admin </a>
                <a class="px-2 nav-link text-nowrap" href="index.php"><i class="bi bi-house"></i> <?php echo htmlspecialchars((string) ((defined('LANG_ADMIN_BACK_TO_SHOP') ? constant('LANG_ADMIN_BACK_TO_SHOP') : null)), ENT_QUOTES, 'UTF-8');?>
 </a>
                <a class="px-2 nav-link text-nowrap" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_LOGOUT_LINK') ? constant('ADMIN_LOGOUT_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
"><i class="bi bi-door-open"></i> <?php echo htmlspecialchars((string) ((defined('LANG_ADMIN_LOGOUT_LINK') ? constant('LANG_ADMIN_LOGOUT_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
 </a>
                <button class="btn btn-danger btn-sm bg-opacity-75 ms-4 me-1" name="arrowUp"><i class="bi bi-chevron-double-up" title="[Ctrl+Alt+Up/Down]"></i></button>
                <button class="btn btn-primary btn-sm bg-opacity-75 ms-1 me-4" name="arrowDown"><i class="bi bi-chevron-double-down" title="[Ctrl+Alt+Up/Down]"></i></button>
            </div>
            <hr>
            <div class="d-flex flex-row justify-content-between">
                <div class="form-check form-switch d-flex justify-content-start" title="Открывать это меню при каждой загрузке страницы">
                    <input class="form-check-input" type="checkbox" role="switch" name="switcherMenuOnLoad" id="switcherMenuOnLoad">
                    <label class="form-check-label px-3" for="switcherMenuOnLoad"><i class="bi bi-pin-angle-fill"></i></label>
                </div>
                <div class="d-flex justify-content-center">
                    <?php $_smarty_tpl->renderSubTemplate("file:atoms/aDivDropdownContainerSize.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                </div>
                <div class="form-check form-switch d-flex justify-content-end" title="Расположение меню">
                    <label class="form-check-label pe-1" for="switcherMenuPosition"><i class="bi bi-text-indent-left"></i></label>
                    <input class="form-check-input ms-2" type="checkbox" role="switch" name="switcherMenuPosition" id="switcherMenuPosition">
                    <label class="form-check-label ps-3" for="switcherMenuPosition"><i class="bi bi-text-indent-right"></i></label>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
