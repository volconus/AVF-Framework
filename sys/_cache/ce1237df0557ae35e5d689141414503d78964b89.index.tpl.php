<?php
/* Smarty version 3.1.30, created on 2017-06-02 14:14:34
  from "C:\wamp\www\bet-admin\app\admin\view\page\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5931489aaf4b06_34942664',
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
  'cache_lifetime' => 0,
),true)) {
function content_5931489aaf4b06_34942664 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Pages</span>
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
                    <span class="caption-subject bold uppercase"> Pages</span>
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
                                <th rowspan="1" colspan="1" style="width: 250px;"> Title</th>
                                <th rowspan="1" colspan="1"> URL</th>
                                <th rowspan="1" colspan="1"> Status</th>
                                <th rowspan="1" colspan="1"> Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                                            <tr class="gradeX odd" role="row">
                                    <td>Test Page</td>
                                    <td>test</td>
                                    <td>Active</td>
                                    <td><div class="btn-group">
                                            <a href="pages/edit/1" class="btn btn-xs sbold green"> Edit
                                                <i class="fa fa-pen"></i>
                                            </a>
                                        </div></td>

                                </tr>
                            

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
