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
            <a href="?">{$l->dashboard}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="menus/list">{$l->menus}</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{$l->{$menu->name}}</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title">{$l->{$menu->name}} {$l->menu}
</h1>
<!-- END PAGE TITLE-->
<form class="returned-form" id="menu" data-url="menus/edit/save" data-return-function="menuEditSave"
      data-loader-result="span#menu-edit-loader">
    <input name="menuId" id="menuId" type="hidden" value="{$menu->id}">
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <span class="menu-edit-loader"></span>
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
                        <span class="caption-subject font-green sbold uppercase">{$l->availObjects}</span>
                        <select name="objectType" id="objectType" class="menu-object-selector hidden">
                            <option value="">{$l->chooseOne}</option>
                            <option value="sports">{$l->sports}</option>
                            <option value="regions">{$l->regions}</option>
                            <option value="competitions">{$l->competitions}</option>
                        </select>
                        <span class="filter" id="filter-1">
                            <select name="sports" id="sports" class="menu-object-sport-selector">
                                <option value="">{$l->chooseOne}</option>
                                {foreach from=$sports item=sport}
                                    <option value="{$sport->remote_id}">{$sport->name}</option>
                                {/foreach}
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
                        <span class="caption-subject font-red sbold uppercase">{$l->assignedObjects}</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="dd" id="nestable_list_2">
                        <ol class="dd-list">
                            {foreach from=$jsons item=json}
                                <li class="dd-item" data-id="{$json->id}" data-id="{$json->id}" data-type="{$json->type}" data-name="{$json->name}"> <div class="dd-handle"> {$json->name} </div> </li>
                                {if isset($json->children)}
                                    <ol>
                                        {foreach from=$json->children item=children}
                                            <li class="dd-item" data-id="{$children->id}" data-type="{$children->type}" data-name="{$children->name}"> <div class="dd-handle"> {$children->name} </div> </li>
                                            {if isset($children->children)}
                                                <ol>
                                                    {foreach from=$children->children item=children}
                                                        <li class="dd-item" data-id="{$children->id}" data-type="{$children->type}" data-name="{$children->name}"> <div class="dd-handle"> {$children->name} </div> </li>
                                                    {/foreach}
                                                </ol>
                                            {/if}
                                        {/foreach}
                                    </ol>
                                {/if}
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
            <textarea id="nestable_list_1_output" name="availObjectsJson"
                      class="form-control col-md-12 margin-bottom-10"></textarea>
            <textarea id="nestable_list_2_output" name="usedObjectsJson"
                      class="form-control col-md-12 margin-bottom-10">{$menu->menu_json}</textarea>
        </div>
    </div>
</form>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/pages/scripts/ui-nestable.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script src="assets/apps/scripts/menu.js" type="text/javascript"/>
