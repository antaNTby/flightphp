<?php
/* Smarty version 5.1.0, created on 2024-06-02 20:49:46
  from 'file:admin__navbar.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_665cb0bad0f809_19504836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd967eb0f5ce607044a59785ecd5c2c3aecb8db00' => 
    array (
      0 => 'admin__navbar.tpl.html',
      1 => 1716179954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_665cb0bad0f809_19504836 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'C:\\OSPanel\\domains\\antCMS.os\\admin\\tpl';
?><nav class="navbar navbar-expand-lg bg-dark fixed-top" data-bs-theme="dark">
    <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_width')), ENT_QUOTES, 'UTF-8');?>
">
        <a class="navbar-brand" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu"><img alt="nix.by logo" src="/media/logo64.png" height="32" /> <?php echo htmlspecialchars((string) ((defined('SITE_URL') ? constant('SITE_URL') : null)), ENT_QUOTES, 'UTF-8');?>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <span class="navbar-text d-none d-sm-inline-block">login </span>
            <span class="navbar-text badge text-bg-secondary mx-1 mx-lg-3" id="adminName" data-adminname="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('adminlogname')), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('adminlogname')), ENT_QUOTES, 'UTF-8');?>
</span>
                        <div class="navbar-nav me-auto mb-2 mb-lg-0 d-flex d-lg-none">
                <hr>
                <a class="nav-link active" aria-current="page" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ((defined('LANG_ADMINISTRATE_LINK') ? constant('LANG_ADMINISTRATE_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
 <i class="bi bi-house-gear"></i></a>
                <a class="nav-link" href="index.php"><?php echo htmlspecialchars((string) ((defined('LANG_ADMIN_BACK_TO_SHOP') ? constant('LANG_ADMIN_BACK_TO_SHOP') : null)), ENT_QUOTES, 'UTF-8');?>
 <i class="bi bi-house"></i></a>
                <a class="nav-link" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_LOGOUT_LINK') ? constant('ADMIN_LOGOUT_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) ((defined('LANG_ADMIN_LOGOUT_LINK') ? constant('LANG_ADMIN_LOGOUT_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
 <i class="bi bi-door-open"></i></a>
            </div>
        </div>
        <div class="navbar-nav d-none d-lg-flex me-0 mb-2 mb-lg-0">
            <a class="nav-link fs-5 active" aria-current="page" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_FILE') ? constant('ADMIN_FILE') : null)), ENT_QUOTES, 'UTF-8');?>
"><i class="bi bi-house-gear"></i> Admin </a>
            <a class="nav-link fs-5" href="index.php"><i class="bi bi-house"></i> <?php echo htmlspecialchars((string) ((defined('LANG_ADMIN_BACK_TO_SHOP') ? constant('LANG_ADMIN_BACK_TO_SHOP') : null)), ENT_QUOTES, 'UTF-8');?>
 </a>
            <a class="nav-link fs-5" href="<?php echo htmlspecialchars((string) ((defined('ADMIN_LOGOUT_LINK') ? constant('ADMIN_LOGOUT_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
"><i class="bi bi-door-open"></i> <?php echo htmlspecialchars((string) ((defined('LANG_ADMIN_LOGOUT_LINK') ? constant('LANG_ADMIN_LOGOUT_LINK') : null)), ENT_QUOTES, 'UTF-8');?>
 </a>
        </div>
    </div>
</nav><?php }
}
