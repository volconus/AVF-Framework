
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
    <title>{$l->panelName} | Administrative Login</title>
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
        <h3 class="form-title font-green">{$l->signIn}</h3>
        <div id="login-result">
            <span></span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">{$l->username}</label>
            <input tabindex="1" class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="{if $loginMethod == 'both'}{$l->usernameIdEmail}{elseif $loginMethod == 'email'}{$l->email}{elseif $loginMethod == 'username'}{$l->username}{elseif $loginMethod == 'id'}{$l->userId}{/if}" name="param" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{$l->password}</label>
            <input tabindex="2" class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="{$l->password}" name="password" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">{$l->language}</label>

            <select tabindex="3" class="form-control" name="language">
                {foreach from=$languages item=language}
                    <option value="{$language->file_name}">{$language->name}</option>
                {/foreach}
            </select>
        </div>
        <div class="form-actions">
            <button tabindex="4" type="submit" class="btn green uppercase">{$l->login}</button>
            <label class="rememberme check mt-checkbox mt-checkbox-outline">
                <input tabindex="3" type="checkbox" name="remember" value="1" />{$l->rememberMe}
                <span></span>
            </label>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright"> {$l->copyrightYear} © {$l->panelName}. {$l->panelDesc}. </div>
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script>
<script src="assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- LANGUAGE SUPPORT -->
<script src="assets/global/scripts/language/{$smarty.session.language}.js" type="text/javascript"></script>
<!-- LANGUAGE SUPPORT -->
<!-- BEGIN FORMS PROCESS FUNCTIONS -->
<script src="assets/apps/scripts/returned-forms.js" type="text/javascript"></script>
<!-- END FORMS PROCESS FUNCTIONS -->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN FRAMEWORK GLOBAL SCRIPTS -->
<script src="assets/global/scripts/framework.js" type="text/javascript"></script>
<script src="assets/apps/scripts/admin.js" type="text/javascript"></script>
<!-- END FRAMEWORK GLOBAL SCRIPTS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- End -->
</body>


</html>