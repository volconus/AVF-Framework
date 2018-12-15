<?php
/* Smarty version 3.1.30, created on 2017-06-02 14:14:42
  from "C:\wamp\www\bet-admin\app\admin\view\page\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593148a200fa01_75654773',
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
  'cache_lifetime' => 0,
),true)) {
function content_593148a200fa01_75654773 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="?">Dashboard</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="pages/list">Pages</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>Test Page</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title">Test Page Page
</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="page" data-url="pages/edit/save" data-return-function="pageEditSave"
      data-loader-result="span#page-edit-loader">
    <input name="pageId" id="pageId" type="hidden" value="1">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="page-edit-loader"></span>
                <button class="btn green-haze" type="submit"><span class="fa fa-check-circle-o"></span> Save
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
                        <span class="caption-subject font-green sbold uppercase">Available Modules</span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                                                            <li class="dd-item" data-id="1" data-name="Live Matches"> <div class="dd-handle"> Live Matches </div> </li>
                                                            <li class="dd-item" data-id="2" data-name="Matches"> <div class="dd-handle"> Matches </div> </li>
                                                            <li class="dd-item" data-id="3" data-name="Single Content"> <div class="dd-handle"> Single Content </div> </li>
                                                            <li class="dd-item" data-id="4" data-name="Banner"> <div class="dd-handle"> Banner </div> </li>
                            
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
                        <span class="caption-subject font-red sbold uppercase">Assigned Modules</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            <li class="dd-item"> <div class="dd-handle"></div> </li>
                                                            <li class="dd-item" data-id="1" data-name="Live Matches"> <div class="dd-handle"> Live Matches </div> </li>
                                                            <li class="dd-item" data-id="2" data-name="Matches"> <div class="dd-handle"> Matches </div> </li>
                            
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
                      class="form-control col-md-12 margin-bottom-10"><br />
<font size='1'><table class='xdebug-error xe-notice' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Notice: Undefined property: stdClass::$page_json in C:\wamp\www\bet-admin\sys\_compiler\1043f7825553a17552f13f9e945187f460cd594e_0.file.edit.tpl.cache.php on line <i>147</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0000</td><td bgcolor='#eeeeec' align='right'>359280</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='C:\wamp\www\bet-admin\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>0</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>2</td><td bgcolor='#eeeeec' align='center'>0.0010</td><td bgcolor='#eeeeec' align='right'>410112</td><td bgcolor='#eeeeec'>include( <font color='#00bb00'>'C:\wamp\www\bet-admin\route.php'</font> )</td><td title='C:\wamp\www\bet-admin\index.php' bgcolor='#eeeeec'>...\index.php<b>:</b>17</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>3</td><td bgcolor='#eeeeec' align='center'>0.0030</td><td bgcolor='#eeeeec' align='right'>456128</td><td bgcolor='#eeeeec'>sys\router::run(  )</td><td title='C:\wamp\www\bet-admin\route.php' bgcolor='#eeeeec'>...\route.php<b>:</b>9</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>4</td><td bgcolor='#eeeeec' align='center'>0.0030</td><td bgcolor='#eeeeec' align='right'>463848</td><td bgcolor='#eeeeec'>sys\core->load(  )</td><td title='C:\wamp\www\bet-admin\sys\core\router.php' bgcolor='#eeeeec'>...\router.php<b>:</b>162</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>5</td><td bgcolor='#eeeeec' align='center'>0.0150</td><td bgcolor='#eeeeec' align='right'>497432</td><td bgcolor='#eeeeec'>page->edit(  )</td><td title='C:\wamp\www\bet-admin\sys\core\core.php' bgcolor='#eeeeec'>...\core.php<b>:</b>182</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>6</td><td bgcolor='#eeeeec' align='center'>1.0620</td><td bgcolor='#eeeeec' align='right'>1254224</td><td bgcolor='#eeeeec'>sys\view->view(  )</td><td title='C:\wamp\www\bet-admin\app\admin\controller\page\page.php' bgcolor='#eeeeec'>...\page.php<b>:</b>25</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>7</td><td bgcolor='#eeeeec' align='center'>1.0620</td><td bgcolor='#eeeeec' align='right'>1254328</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->display(  )</td><td title='C:\wamp\www\bet-admin\sys\core\view.php' bgcolor='#eeeeec'>...\view.php<b>:</b>30</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>8</td><td bgcolor='#eeeeec' align='center'>1.0620</td><td bgcolor='#eeeeec' align='right'>1254328</td><td bgcolor='#eeeeec'>Smarty_Internal_TemplateBase->_execute(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>114</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>9</td><td bgcolor='#eeeeec' align='center'>1.0630</td><td bgcolor='#eeeeec' align='right'>1273552</td><td bgcolor='#eeeeec'>Smarty_Internal_Template->render(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_internal_templatebase.php' bgcolor='#eeeeec'>...\smarty_internal_templatebase.php<b>:</b>199</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>10</td><td bgcolor='#eeeeec' align='center'>1.0630</td><td bgcolor='#eeeeec' align='right'>1275872</td><td bgcolor='#eeeeec'>Smarty_Template_Cached->render(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_internal_template.php' bgcolor='#eeeeec'>...\smarty_internal_template.php<b>:</b>179</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>11</td><td bgcolor='#eeeeec' align='center'>1.0630</td><td bgcolor='#eeeeec' align='right'>1276448</td><td bgcolor='#eeeeec'>Smarty_Internal_Runtime_UpdateCache->updateCache(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_template_cached.php' bgcolor='#eeeeec'>...\smarty_template_cached.php<b>:</b>142</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>12</td><td bgcolor='#eeeeec' align='center'>1.0630</td><td bgcolor='#eeeeec' align='right'>1293456</td><td bgcolor='#eeeeec'>Smarty_Template_Compiled->render(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_internal_runtime_updatecache.php' bgcolor='#eeeeec'>...\smarty_internal_runtime_updatecache.php<b>:</b>89</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>13</td><td bgcolor='#eeeeec' align='center'>1.0650</td><td bgcolor='#eeeeec' align='right'>1312968</td><td bgcolor='#eeeeec'>Smarty_Template_Resource_Base->getRenderedTemplateCode(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_template_compiled.php' bgcolor='#eeeeec'>...\smarty_template_compiled.php<b>:</b>170</td></tr>
<tr><td bgcolor='#eeeeec' align='center'>14</td><td bgcolor='#eeeeec' align='center'>1.0650</td><td bgcolor='#eeeeec' align='right'>1312968</td><td bgcolor='#eeeeec'>content_592ed9e1324b08_15574654(  )</td><td title='C:\wamp\www\bet-admin\sys\sysplugins\smarty_template_resource_base.php' bgcolor='#eeeeec'>...\smarty_template_resource_base.php<b>:</b>128</td></tr>
</table></font>
</textarea>
        </div>
    </div>
</form>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="assets/apps/scripts/page.js" type="text/javascript"/>
<?php }
}
