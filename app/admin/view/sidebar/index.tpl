<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{$l->sidebars}</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> {$l->sidebars}
</h1>
<!-- END PAGE TITLE-->
Select a Sidebar
 <div class="m-grid m-grid-demo">
        <div class="m-grid-row">
            {foreach from=$sidebars item=sidebar}
            <a href="sidebars/edit/{$sidebar->id}"><div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4">{$sidebar->name}</div></a>
            {/foreach}
        </div>
    </div>