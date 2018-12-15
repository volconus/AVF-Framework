<?php
/* Smarty version 3.1.30, created on 2017-05-31 13:47:30
  from "C:\wamp\www\bet-admin\app\admin\view\sidebar\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e9f42dfa200_46897020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf2776110510d30e0eeeacd0d859a0421e4a5fa8' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\sidebar\\edit.tpl',
      1 => 1496227646,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e9f42dfa200_46897020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4889592e9f42d75507_59345565';
?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<style>
    form#sidebar div.portlet-body {
        overflow: auto;
        height: 400px;
    }
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?"><?php echo $_smarty_tpl->tpl_vars['l']->value->dashboard;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="sidebars/list"><?php echo $_smarty_tpl->tpl_vars['l']->value->sidebars;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['sidebar']->value->name;?>
</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value->name;?>
 <?php echo $_smarty_tpl->tpl_vars['l']->value->sidebar;?>

</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="sidebar" data-url="sidebars/edit/save" data-return-function="sidebarEditSave"
      data-loader-result="span#sidebar-edit-loader">
    <input name="sidebarId" id="sidebarId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sidebar']->value->id;?>
">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="sidebar-edit-loader"></span>
                <button class="btn green-haze" type="submit"><span class="fa fa-check-circle-o"></span> <?php echo $_smarty_tpl->tpl_vars['l']->value->save;?>

                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-green"></i>
                        <span class="caption-subject font-green sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->availWidgets;?>
</span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableWidgets']->value, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
                                <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['widget']->value->id;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['widget']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['widget']->value->name;?>
 </div> </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-bubble font-red"></i>
                        <span class="caption-subject font-red sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->assignedWidgets;?>
</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assignedWidgets']->value, 'widget');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->value) {
?>
                                <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['widget']->value->id;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['widget']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['widget']->value->name;?>
 </div> </li>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h3>Serialised Output (per list)</h3>
            <textarea id="nestable_list_1_output" name="availWidgetsJson"
                      class="form-control col-md-12 margin-bottom-10"></textarea>
            <textarea id="nestable_list_2_output" name="usedWidgetsJson"
                      class="form-control col-md-12 margin-bottom-10"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value->sidebar_json;?>
</textarea>
        </div>
    </div>
</form>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<?php echo '<script'; ?>
 src="assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php echo '<script'; ?>
 src="assets/pages/scripts/ui-nestable.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- END PAGE LEVEL SCRIPTS -->

<?php echo '<script'; ?>
 src="assets/apps/scripts/sidebar.js" type="text/javascript"/>
<?php }
}
