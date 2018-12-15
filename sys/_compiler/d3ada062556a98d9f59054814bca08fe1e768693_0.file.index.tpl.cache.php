<?php
/* Smarty version 3.1.30, created on 2017-03-14 09:36:02
  from "C:\wamp\www\bet-admin\app\admin\view\sport\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c78f52219e43_21201604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ada062556a98d9f59054814bca08fe1e768693' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\sport\\index.tpl',
      1 => 1489473358,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c78f52219e43_21201604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '40658c78f521336c5_76562094';
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?"><?php echo $_smarty_tpl->tpl_vars['l']->value->dashboard;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->sports;?>
 Model</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> <?php echo $_smarty_tpl->tpl_vars['l']->value->sports;?>
 Model
</h1>
<!-- END PAGE TITLE-->

<?php echo var_dump($_smarty_tpl->tpl_vars['table']->value);
}
}
