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
            <a href="?">{$l->dashboard}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="pages/list">{$l->pages}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{$page->title}</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title">{$page->title} {$l->page}
</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="page" data-url="pages/edit/save" data-return-function="pageEditSave"
      data-loader-result="span#page-edit-loader">
    <input name="pageId" id="pageId" type="hidden" value="{$page->id}">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="page-edit-loader"></span>
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
                        <span class="caption-subject font-green sbold uppercase">{$l->availModules}</span>
                    </div>
                </div>
                <div class="portlet-body ">
                    <div class="dd" id="nestable_list_1">
                        <ol class="dd-list">
                            {foreach from=$availableModules item=module}
                                <li class="dd-item" data-id="{$module->id}" data-name="{$module->name}"> <div class="dd-handle"> {$module->name} </div> </li>
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
                        <span class="caption-subject font-red sbold uppercase">{$l->assignedModules}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            <li class="dd-item"> <div class="dd-handle"></div> </li>
                            {foreach from=$assignedModules item=module}
                                <li class="dd-item" data-id="{$module->id}" data-name="{$module->name}"> <div class="dd-handle"> {$module->name} </div> </li>
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
            <textarea id="nestable_list_1_output" name="availModulesJson"
                      class="form-control col-md-12 margin-bottom-10"></textarea>
            <textarea id="nestable_list_2_output" name="usedModulesJson"
                      class="form-control col-md-12 margin-bottom-10">{$page->page_json}</textarea>
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
