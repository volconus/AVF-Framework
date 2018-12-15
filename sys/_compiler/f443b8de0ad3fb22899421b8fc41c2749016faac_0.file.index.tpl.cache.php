<?php
/* Smarty version 3.1.30, created on 2017-03-14 09:35:15
  from "C:\wamp\www\bet-admin\app\admin\view\competition\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58c78f234ec8c8_37482781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f443b8de0ad3fb22899421b8fc41c2749016faac' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\competition\\index.tpl',
      1 => 1489473304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c78f234ec8c8_37482781 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2440258c78f234022c7_83931390';
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?"><?php echo $_smarty_tpl->tpl_vars['l']->value->dashboard;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->competitions;?>
 Model</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> <?php echo $_smarty_tpl->tpl_vars['l']->value->competitions;?>
 Model
</h1>
<!-- END PAGE TITLE-->

<?php echo var_dump($_smarty_tpl->tpl_vars['table']->value);
}
}
