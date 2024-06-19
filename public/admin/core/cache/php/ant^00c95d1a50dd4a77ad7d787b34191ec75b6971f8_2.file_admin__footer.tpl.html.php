<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:admin__footer.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d2070bf03_66432713',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00c95d1a50dd4a77ad7d787b34191ec75b6971f8' => 
    array (
      0 => 'admin__footer.tpl.html',
      1 => 1717566429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_666a0d2070bf03_66432713 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl';
?><div class="d-flex justify-content-between align-items-center px-xl-0">
        <ul class="nav justify-content-start" title="Ширина контейнера страницы">
        <li class="nav-item dropup-center dropup">
            <a class="dropdown-toggle btn btn-outline-secondary my-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_width')), ENT_QUOTES, 'UTF-8');?>

            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
                <li>
                    <h6 class="dropdown-header">
                        sm: 540px<br>
                        md: 720px<br>
                        lg: 960px<br>
                        xl: 1140px<br>
                        xxl: 1320px
                    </h6>
                </li>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('allowedContainerWidths'), 'width');
$foreach8DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('width')->value) {
$foreach8DoElse = false;
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
        </li>
    </ul>
    <ul class="nav justify-content-start" title="Позиция вывода Сообщений Сервера">
        <li class="nav-item dropup-center dropup">
            <a class="dropdown-toggle btn btn-outline-secondary my-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allowedToastPlacementNames')[$_smarty_tpl->getValue('placementID')]), ENT_QUOTES, 'UTF-8');?>

            </a>
            <ul class="dropdown-menu dropdown-menu-dark" id="allowedToastPlacementsList" data-placement=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('placementID')), ENT_QUOTES, 'UTF-8');?>
>
                <?php
$__section_plId_0_loop = (is_array(@$_loop=$_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('allowedToastPlacements'))) ? count($_loop) : max(0, (int) $_loop));
$__section_plId_0_total = $__section_plId_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_plId'] = new \Smarty\Variable(array());
if ($__section_plId_0_total !== 0) {
for ($__section_plId_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_plId']->value['index'] = 0; $__section_plId_0_iteration <= $__section_plId_0_total; $__section_plId_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_plId']->value['index']++){
?>
                <?php $_smarty_tpl->assign('indexTP', ($_smarty_tpl->getValue('__smarty_section_plId')['index'] ?? null), false, NULL);?>
                <?php if ($_smarty_tpl->getValue('indexTP') == $_smarty_tpl->getValue('placementID')) {?>
                <a class="dropdown-item active" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
?change_toast_placement=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('indexTP')), ENT_QUOTES, 'UTF-8');?>
" data-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('indexTP')), ENT_QUOTES, 'UTF-8');?>
" data-value="top-0 start-0" aria-current="true"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('indexTP')), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allowedToastPlacementNames')[$_smarty_tpl->getValue('indexTP')]), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php } else { ?>
                <a class="dropdown-item" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
?change_toast_placement=<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('indexTP')), ENT_QUOTES, 'UTF-8');?>
" data-key="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('indexTP')), ENT_QUOTES, 'UTF-8');?>
" data-value="top-0 start-0"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('indexTP')), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('allowedToastPlacementNames')[$_smarty_tpl->getValue('indexTP')]), ENT_QUOTES, 'UTF-8');?>
</a>
                <?php }?>
                <?php
}
}
?>
            </ul>
        </li>
    </ul>
    <span class="navbar-text" data-id="template-now"> <?php echo htmlspecialchars((string) ($_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y-%m-%d %H:%M")), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="navbar-text">php <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('pver')), ENT_QUOTES, 'UTF-8');?>
</span>
    <span class="navbar-text">db <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('mver')), ENT_QUOTES, 'UTF-8');?>
</span>
    <a class="navbar-brand" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"><img alt="nix.by logo" src="/media/logo64.png" height="32" /> <?php echo htmlspecialchars((string) ((defined('SITE_URL') ? constant('SITE_URL') : null)), ENT_QUOTES, 'UTF-8');?>
 menu</a>
    <ul class="nav justify-content-end">
        <li class="nav-item"><a href="/" class="nav-link disabled px-2 text-muted">Home</a></li>
                <li class="nav-item dropup-center dropup">
            <button class="dropdown-toggle btn btn-outline-secondary my-1" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-command"></i></button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" target="_blank" href="etfm.php"><i class="bi bi-house-exclamation-fill"></i> TinyFileManager</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <?php if ($_smarty_tpl->getValue('c')) {?><li><button class="dropdown-item text-bg-danger" name="btn_TerminateCompany" title="УДАЛИТЬ ЭТУ КОМПАНИЮ БЕЗО ВСЯКИХ НЕЖНОСТЕЙ" data-kill_id="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('c')['companyID']), ENT_QUOTES, 'UTF-8');?>
" data-app="AdminCompany" data-operation="TerminateCompany"><i class="bi bi-sign-dead-end"></i> Удалить компанию</button></li><?php }?>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><button type="button" class="dropdown-item" id="btnSuccess">Показать Success</button></li>
                <li><button type="button" class="dropdown-item" id="btnDanger">Show Error</button></li>
                <li><button type="button" class="dropdown-item" id="btnShowToast">Show btnShowToast</button></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link disabled px-2 text-muted">About</a></li>
    </ul>
</div><?php }
}
