<?php
/* Smarty version 5.1.0, created on 2024-06-13 00:03:28
  from 'file:admin.tpl.html' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.1.0',
  'unifunc' => 'content_666a0d20673d31_40974605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f157b66709b2da923b094edaf7bc7103ec879cd' => 
    array (
      0 => 'admin.tpl.html',
      1 => 1717566429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin__navbar.tpl.html' => 1,
    'file:../apps/Toasts/appToasts.tpl.html' => 1,
    'file:admin__menu_offcanvas.tpl.html' => 1,
    'file:admin__footer.tpl.html' => 1,
  ),
))) {
function content_666a0d20673d31_40974605 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'W:\\domains\\antCMS.os\\admin\\tpl';
?><!DOCTYPE html>
<html class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_width')), ENT_QUOTES, 'UTF-8');?>
 h-100" lang="ru-RU"><?php $_smarty_tpl->assign('use_offcanvas_menu', 1, false, NULL);?>

<head>
    
    <style type="text/css">
    div.offcanvas {
        background-color: #8888aa88;
    }

    div.offcanvas-header {
        background-color: #222222;
        S
    }

    div#uiControl {
        background-color: #8888aa02;
    }
    </style>
    
    <base href= />
    <link rel="icon" sizes=16x16 href="/media/favicon.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="title" content="admin antCMS" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>admin :: <?php echo htmlspecialchars((string) ((defined('SITE_URL') ? constant('SITE_URL') : null)), ENT_QUOTES, 'UTF-8');?>
 :: antCMS v00 alpha</title>
            <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/vendor/twbs/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="/lib/datatables/datatables.css">
    <link rel="stylesheet" type="text/css" href="/admin/css/uiAdmin.css">
</head>

<body class="d-flex flex-column h-100" style="overflow-y: scroll;">     <header>
        <?php $_smarty_tpl->renderSubTemplate("file:admin__navbar.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    </header>
    <?php if ($_smarty_tpl->getValue('smarty_error')) {?>
    <h6 class="text-bg-danger p-2">
        <?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('smarty_error_message')), ENT_QUOTES, 'UTF-8');?>

    </h6>
    <?php }?>
    <main class="flex-shrink-0" data-tpl="admin.tpl.html" style="padding-top:60px;">
        <div aria-live="polite" aria-atomic="true" class="position-relative" id="toast-area">
            <!-- Position it: -->
            <!-- - `.toast-container` for spacing between toasts -->
            <!-- - `top-0` & `end-0` to position the toasts in the upper right corner -->
            <!-- - `.p-3` to prevent the toasts from sticking to the edge of the container  -->

                <?php $_smarty_tpl->renderSubTemplate("file:../apps/Toasts/appToasts.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('position'=>0), (int) 0, $_smarty_current_dir);
?>

        </div>
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_width')), ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->renderSubTemplate("file:admin__menu_offcanvas.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                                                <?php $_smarty_tpl->renderSubTemplate(((string)$_smarty_tpl->getValue('admin_main_content_template')), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
                                            </div>
    </main>
    <footer class="text-bg-dark d-block mt-auto">
        <div class="<?php echo htmlspecialchars((string) ($_smarty_tpl->getValue('container_width')), ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->renderSubTemplate("file:admin__footer.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
        </div>
    </footer>
            <?php echo '<script'; ?>
 src="/vendor/components/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/lib/datatables/datatables.js"><?php echo '</script'; ?>
>
            <?php echo '<script'; ?>
 src="/admin/js/admin.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/admin/js/index.js" type="module"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/admin/js/dt/dataTables.cellEdit.js"><?php echo '</script'; ?>
>
    </body>

</html><?php }
}
