<?php
/* Smarty version 3.1.30, created on 2017-04-18 10:39:53
  from "C:\wamp\www\bet-admin\app\admin\view\menu\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f5c2c9c6f984_15003137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d77ee6514494e3c969540be5c61b0d5b610d18e' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\menu\\index.tpl',
      1 => 1492501190,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f5c2c9c6f984_15003137 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3103158f5c2c9bdb282_94992034';
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->menus;?>
</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> <?php echo $_smarty_tpl->tpl_vars['l']->value->menus;?>

</h1>
<!-- END PAGE TITLE-->
Select a Menu
 <div class="m-grid m-grid-demo">
        <div class="m-grid-row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menus']->value, 'menu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
?>
            <a href="menus/edit/<?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
"><div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4"><?php echo $_smarty_tpl->tpl_vars['menu']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['l']->value->menu;?>
</div></a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    </div><?php }
}
