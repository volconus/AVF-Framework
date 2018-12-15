<?php
/* Smarty version 3.1.30, created on 2017-05-28 22:39:59
  from "C:\wamp\www\bet-admin\app\admin\view\sidebar\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592b278fda23c3_25534199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e95e4d94f558024925ca48ab0a823b5690580ff' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\sidebar\\index.tpl',
      1 => 1496000356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592b278fda23c3_25534199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13490592b278fd63bc1_18891899';
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->sidebars;?>
</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> <?php echo $_smarty_tpl->tpl_vars['l']->value->sidebars;?>

</h1>
<!-- END PAGE TITLE-->
Select a Sidebar
 <div class="m-grid m-grid-demo">
        <div class="m-grid-row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sidebars']->value, 'sidebar');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sidebar']->value) {
?>
            <a href="sidebars/edit/<?php echo $_smarty_tpl->tpl_vars['sidebar']->value->id;?>
"><div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value->name;?>
</div></a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div><?php }
}
