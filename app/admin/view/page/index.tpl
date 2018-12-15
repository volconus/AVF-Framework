<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{$l->pages}</span>
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
                    <span class="caption-subject bold uppercase"> {$l->pages}</span>
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
                                <th rowspan="1" colspan="1" style="width: 250px;"> {$l->title}</th>
                                <th rowspan="1" colspan="1"> {$l->url}</th>
                                <th rowspan="1" colspan="1"> {$l->status}</th>
                                <th rowspan="1" colspan="1"> {$l->actions}</th>
                            </tr>
                            </thead>
                            <tbody>
                            {foreach from=$pages item=page}
                                <tr class="gradeX odd" role="row">
                                    <td>{$page->title}</td>
                                    <td>{$page->url}</td>
                                    <td>{if $page->status == 'A'}{$l->active}{else}{$l->passive}{/if}</td>
                                    <td><div class="btn-group">
                                            <a href="pages/edit/{$page->id}" class="btn btn-xs sbold green"> Edit
                                                <i class="fa fa-pen"></i>
                                            </a>
                                        </div></td>

                                </tr>
                            {/foreach}

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>