<?php
/* Smarty version 3.1.30, created on 2017-05-31 17:57:37
  from "C:\wamp\www\bet-admin\app\admin\view\page\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ed9e1324b08_15574654',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1043f7825553a17552f13f9e945187f460cd594e' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\page\\edit.tpl',
      1 => 1496242655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ed9e1324b08_15574654 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21737592ed9e12bf202_09189366';
?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<style>
    form#page div.portlet-body {
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
            <a href="pages/list"><?php echo $_smarty_tpl->tpl_vars['l']->value->pages;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
 <?php echo $_smarty_tpl->tpl_vars['l']->value->page;?>

</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="page" data-url="pages/edit/save" data-return-function="pageEditSave"
      data-loader-result="span#page-edit-loader">
    <input name="pageId" id="pageId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="page-edit-loader"></span>
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
                        <span class="caption-subject font-green sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->availModules;?>
</span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['availableModules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                                <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
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
                        <span class="caption-subject font-red sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->assignedModules;?>
</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            <li class="dd-item"> <div class="dd-handle"></div> </li>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assignedModules']->value, 'module');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['module']->value) {
?>
                                <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['module']->value->id;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
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
            <textarea id="nestable_list_1_output" name="availModulesJson"
                      class="form-control col-md-12 margin-bottom-10"></textarea>
            <textarea id="nestable_list_2_output" name="usedModulesJson"
                      class="form-control col-md-12 margin-bottom-10"><?php echo $_smarty_tpl->tpl_vars['page']->value->page_json;?>
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
 src="assets/apps/scripts/page.js" type="text/javascript"/>
<?php }
}
