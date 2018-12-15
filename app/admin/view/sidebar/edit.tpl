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
            <a href="?">{$l->dashboard}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="sidebars/list">{$l->sidebars}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{$sidebar->name}</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title">{$sidebar->name} {$l->sidebar}
</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="sidebar" data-url="sidebars/edit/save" data-return-function="sidebarEditSave"
      data-loader-result="span#sidebar-edit-loader">
    <input name="sidebarId" id="sidebarId" type="hidden" value="{$sidebar->id}">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="sidebar-edit-loader"></span>
                <button class="btn green-haze" type="submit"><span class="fa fa-check-circle-o"></span> {$l->save}
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
                        <span class="caption-subject font-green sbold uppercase">{$l->availWidgets}</span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            {foreach from=$availableWidgets item=widget}
                                <li class="dd-item" data-id="{$widget->id}" data-name="{$widget->name}"> <div class="dd-handle"> {$widget->name} </div> </li>
                            {/foreach}
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
                        <span class="caption-subject font-red sbold uppercase">{$l->assignedWidgets}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            {foreach from=$assignedWidgets item=widget}
                                <li class="dd-item" data-id="{$widget->id}" data-name="{$widget->name}"> <div class="dd-handle"> {$widget->name} </div> </li>
                            {/foreach}
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
                      class="form-control col-md-12 margin-bottom-10">{$sidebar->sidebar_json}</textarea>
        </div>
    </div>
</form>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="assets/apps/scripts/sidebar.js" type="text/javascript"/>
