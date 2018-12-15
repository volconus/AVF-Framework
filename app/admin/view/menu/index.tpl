<div class="page-bar">
    <ul class="page-breadcrumb">
        <li>
            <a href="?">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span>{$l->menus}</span>
        </li>
    </ul>
</div>
<!-- BEGIN PAGE TITLE-->
<h1 class="page-title new-page-title"> {$l->menus}
</h1>
<!-- END PAGE TITLE-->
Select a Menu
 <div class="m-grid m-grid-demo">
        <div class="m-grid-row">
            {foreach from=$menus item=menu}
            <a href="menus/edit/{$menu->name}"><div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4">{$menu->name} {$l->menu}</div></a>
            {/foreach}
        </div>
    </div>