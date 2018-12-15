<?php
/* Smarty version 3.1.30, created on 2017-05-31 17:33:41
  from "C:\wamp\www\bet-admin\app\admin\view\page\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ed445631f01_92498115',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c37a12e7acdd3fe1cad2cac5ab33d2c9748e300' => 
    array (
      0 => 'C:\\wamp\\www\\bet-admin\\app\\admin\\view\\page\\index.tpl',
      1 => 1496241044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ed445631f01_92498115 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '29783592ed4455b1088_35529338';
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span><?php echo $_smarty_tpl->tpl_vars['l']->value->pages;?>
</span>
        </li>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-dark">
                    <i class="icon-list font-dark"></i>
                    <span class="caption-subject bold uppercase"> <?php echo $_smarty_tpl->tpl_vars['l']->value->pages;?>
</span>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-toolbar">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="btn-group">
                                <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                    <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">
                    <div class="table-scrollable">
                        <table class="table table-striped table-bordered table-hover table-checkable no-footer"
                               id="sample_1" role="grid" aria-describedby="sample_1_info">
                            <thead>
                            <tr role="row">
                                <th rowspan="1" colspan="1" style="width: 250px;"> <?php echo $_smarty_tpl->tpl_vars['l']->value->title;?>
</th>
                                <th rowspan="1" colspan="1"> <?php echo $_smarty_tpl->tpl_vars['l']->value->url;?>
</th>
                                <th rowspan="1" colspan="1"> <?php echo $_smarty_tpl->tpl_vars['l']->value->status;?>
</th>
                                <th rowspan="1" colspan="1"> <?php echo $_smarty_tpl->tpl_vars['l']->value->actions;?>
</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                                <tr class="gradeX odd" role="row">
                                    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->url;?>
</td>
                                    <td><?php if ($_smarty_tpl->tpl_vars['page']->value->status == 'A') {
echo $_smarty_tpl->tpl_vars['l']->value->active;
} else {
echo $_smarty_tpl->tpl_vars['l']->value->passive;
}?></td>
                                    <td><div class="btn-group">
                                            <a href="pages/edit/<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
" class="btn btn-xs sbold green"> Edit
                                                <i class="fa fa-pen"></i>
                                            </a>
                                        </div></td>

                                </tr>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div><?php }
}
