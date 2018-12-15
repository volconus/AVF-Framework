<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="nav-item start active">
                <a href="dashboard" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-home"></i>
                    <span class="title">{$l->dashboard}</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="menus" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-list"></i>
                    <span class="title">{$l->menus}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="sidebars" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-list"></i>
                    <span class="title">{$l->sidebars}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-list"></i>
                    <span class="title">{$l->pages}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="admins/list" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-briefcase"></i>
                    <span class="title">{$l->administrators}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="users/list" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-users"></i>
                    <span class="title">{$l->users}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="regions/list" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-book-open"></i>
                    <span class="title">{$l->regions}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="competitions/list" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-social-dribbble"></i>
                    <span class="title">{$l->competitions}</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="sports/list" class="nav-link nav-toggle dummy-ajax-request" data-result=".page-content">
                    <i class="icon-layers"></i>
                    <span class="title">{$l->sports}</span>
                </a>
            </li>
            {foreach from=$modules item=module}

            {/foreach}
        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->