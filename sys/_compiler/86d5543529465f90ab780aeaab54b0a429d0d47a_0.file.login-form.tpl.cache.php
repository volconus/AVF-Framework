<?php
/* Smarty version 3.1.30, created on 2017-04-18 12:27:31
  from "C:\wamp\www\bet-admin\app\admin\view\session\login-form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f5dc03e57e06_64119087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86d5543529465f90ab780aeaab54b0a429d0d47a' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\session\\login-form.tpl',
      1 => 1492507649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f5dc03e57e06_64119087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2462858f5dc03ddec87_91491273';
?>

<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title><?php echo $_smarty_tpl->tpl_vars['l']->value->panelName;?>
 | Administrative Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Administrative Panel" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="index.php" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="#">
        <img src="assets/pages/img/logo-big.png" alt="" /> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="returned-form" id="login" data-url="login/auth" data-return-function="loginResult" data-loader-result="#login-result span" method="post">
        <h3 class="form-title font-green"><?php echo $_smarty_tpl->tpl_vars['l']->value->signIn;?>
</h3>
        <div id="login-result">
            <span></span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9"><?php echo $_smarty_tpl->tpl_vars['l']->value->username;?>
</label>
            <input tabindex="1" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="<?php if ($_smarty_tpl->tpl_vars['loginMethod']->value == 'both') {
echo $_smarty_tpl->tpl_vars['l']->value->usernameIdEmail;
} elseif ($_smarty_tpl->tpl_vars['loginMethod']->value == 'email') {
echo $_smarty_tpl->tpl_vars['l']->value->email;
} elseif ($_smarty_tpl->tpl_vars['loginMethod']->value == 'username') {
echo $_smarty_tpl->tpl_vars['l']->value->username;
} elseif ($_smarty_tpl->tpl_vars['loginMethod']->value == 'id') {
echo $_smarty_tpl->tpl_vars['l']->value->userId;
}?>" name="param" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9"><?php echo $_smarty_tpl->tpl_vars['l']->value->password;?>
</label>
            <input tabindex="2" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="<?php echo $_smarty_tpl->tpl_vars['l']->value->password;?>
" name="password" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9"><?php echo $_smarty_tpl->tpl_vars['l']->value->language;?>
</label>

            <select tabindex="3" class="form-control" name="language">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->file_name;?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value->name;?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
        </div>
        <div class="form-actions">
            <button tabindex="4" type="submit" class="btn green uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->login;?>
</button>
            <label class="rememberme check mt-checkbox mt-checkbox-outline">
                <input tabindex="3" type="checkbox" name="remember" value="1" /><?php echo $_smarty_tpl->tpl_vars['l']->value->rememberMe;?>

                <span></span>
            </label>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright"> <?php echo $_smarty_tpl->tpl_vars['l']->value->copyrightYear;?>
 © <?php echo $_smarty_tpl->tpl_vars['l']->value->panelName;?>
. <?php echo $_smarty_tpl->tpl_vars['l']->value->panelDesc;?>
. </div>
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="assets/global/plugins/respond.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/excanvas.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/ie8.fix.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<!-- LANGUAGE SUPPORT -->
<?php echo '<script'; ?>
 src="assets/global/scripts/language/<?php echo $_SESSION['language'];?>
.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- LANGUAGE SUPPORT -->
<!-- BEGIN FORMS PROCESS FUNCTIONS -->
<?php echo '<script'; ?>
 src="assets/apps/scripts/returned-forms.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END FORMS PROCESS FUNCTIONS -->
<!-- BEGIN CORE PLUGINS -->
<?php echo '<script'; ?>
 src="assets/global/plugins/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/js.cookie.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo '<script'; ?>
 src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN FRAMEWORK GLOBAL SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/global/scripts/framework.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/apps/scripts/admin.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END FRAMEWORK GLOBAL SCRIPTS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/global/scripts/app.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- End -->
</body>


</html><?php }
}
