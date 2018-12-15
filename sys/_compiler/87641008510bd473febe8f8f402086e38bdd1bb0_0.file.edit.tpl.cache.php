<?php
/* Smarty version 3.1.30, created on 2017-04-19 11:48:44
  from "C:\wamp\www\bet-admin\app\admin\view\menu\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f7246c822086_43408948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87641008510bd473febe8f8f402086e38bdd1bb0' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\menu\\edit.tpl',
      1 => 1492591722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f7246c822086_43408948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2834358f7246c718680_18400919';
?>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->
<style>
    form#menu div.portlet-body {
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
            <a href="menus/list"><?php echo $_smarty_tpl->tpl_vars['l']->value->menus;?>
</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->{$_smarty_tpl->tpl_vars['menu']->value->name};?>
</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"><?php echo $_smarty_tpl->tpl_vars['l']->value->{$_smarty_tpl->tpl_vars['menu']->value->name};?>
 <?php echo $_smarty_tpl->tpl_vars['l']->value->menu;?>

</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="menu" data-url="menus/edit/save" data-return-function="menuEditSave"
      data-loader-result="span#menu-edit-loader">
    <input name="menuId" id="menuId" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['menu']->value->id;?>
">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="menu-edit-loader"></span>
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
                        <span class="caption-subject font-green sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->availObjects;?>
</span>
                        <select name="objectType" id="objectType" class="menu-object-selector hidden">
                            <option value=""><?php echo $_smarty_tpl->tpl_vars['l']->value->chooseOne;?>
</option>
                            <option value="sports"><?php echo $_smarty_tpl->tpl_vars['l']->value->sports;?>
</option>
                            <option value="regions"><?php echo $_smarty_tpl->tpl_vars['l']->value->regions;?>
</option>
                            <option value="competitions"><?php echo $_smarty_tpl->tpl_vars['l']->value->competitions;?>
</option>
                        </select>
                        <span class="filter" id="filter-1">
                            <select name="sports" id="sports" class="menu-object-sport-selector">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['l']->value->chooseOne;?>
</option>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sports']->value, 'sport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sport']->value) {
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['sport']->value->remote_id;?>
"><?php echo $_smarty_tpl->tpl_vars['sport']->value->name;?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            </select>
                        </span>
                        <span class="filter" id="filter-2"><select name="regions" id="regions" class="menu-object-region-selector"></select></span>
                        <span class="filter" id="filter-3"><select name="competitions" id="competitions" class="menu-object-competition-selector hidden"></select></span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
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
                        <span class="caption-subject font-red sbold uppercase"><?php echo $_smarty_tpl->tpl_vars['l']->value->assignedObjects;?>
</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jsons']->value, 'json');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['json']->value) {
?>
                                <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['json']->value->id;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['json']->value->id;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['json']->value->type;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['json']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['json']->value->name;?>
 </div> </li>
                                <?php if (isset($_smarty_tpl->tpl_vars['json']->value->children)) {?>
                                    <ol>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['json']->value->children, 'children');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['children']->value) {
?>
                                            <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['children']->value->id;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['children']->value->type;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['children']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['children']->value->name;?>
 </div> </li>
                                            <?php if (isset($_smarty_tpl->tpl_vars['children']->value->children)) {?>
                                                <ol>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value->children, 'children');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['children']->value) {
?>
                                                        <li class="dd-item" data-id="<?php echo $_smarty_tpl->tpl_vars['children']->value->id;?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['children']->value->type;?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['children']->value->name;?>
"> <div class="dd-handle"> <?php echo $_smarty_tpl->tpl_vars['children']->value->name;?>
 </div> </li>
                                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                                </ol>
                                            <?php }?>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                    </ol>
                                <?php }?>
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
            <textarea id="nestable_list_1_output" name="availObjectsJson"
                      class="form-control col-md-12 margin-bottom-10"></textarea>
            <textarea id="nestable_list_2_output" name="usedObjectsJson"
                      class="form-control col-md-12 margin-bottom-10"><?php echo $_smarty_tpl->tpl_vars['menu']->value->menu_json;?>
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
 src="assets/apps/scripts/menu.js" type="text/javascript"/>
<?php }
}
