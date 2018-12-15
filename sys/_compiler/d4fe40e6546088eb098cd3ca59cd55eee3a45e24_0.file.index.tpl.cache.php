<?php
/* Smarty version 3.1.30, created on 2017-03-14 09:36:05
  from "C:\wamp\www\bet-admin\app\admin\view\region\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c78f55e1c1c9_77817038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4fe40e6546088eb098cd3ca59cd55eee3a45e24' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\region\\index.tpl',
      1 => 1489473342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c78f55e1c1c9_77817038 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '437558c78f55d8b946_80942627';
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?"><?php echo $_smarty_tpl->tpl_vars['l']->value->dashboard;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->regions;?>
 Model</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> <?php echo $_smarty_tpl->tpl_vars['l']->value->regions;?>
 Model
</h1>
<!-- END PAGE TITLE-->

<?php echo var_dump($_smarty_tpl->tpl_vars['table']->value);
}
}
