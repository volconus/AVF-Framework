<?php
use sys\router as route;
# login
route::get(['route' => '', 'app' => 'admin', 'controllerPath' => 'dashboard', 'controller' => 'dashboard', 'method' => 'index']);
route::get(['route' => 'login', 'app' => 'admin', 'controller' => 'session', 'method' => 'form']);
route::post(['route' => 'auth', 'app' => 'admin', 'controller' => 'session', 'method' => 'auth']);

#logout
route::get(['route' => 'logout', 'app' => 'admin', 'controller' => 'session', 'method' => 'out']);

#dashboard
route::get(['route' => 'dashboard', 'app' => 'admin', 'controllerPath' => 'dashboard', 'controller' => 'dashboard', 'method' => 'index']);

#language change
route::get(['route' => 'language\/change\/{09}', 'app' => 'admin', 'controller' => 'language', 'method' => 'change']);

#administrators
route::get(['route' => 'admins\/list', 'app' => 'admin', 'controllerPath' => 'admin', 'controller' => 'admin', 'method' => 'index']);
route::post(['route' => 'admins\/list\/result', 'app' => 'admin', 'controllerPath' => 'admin', 'controller' => 'admin', 'method' => 'indexResult']);

#acc groups
route::get(['route' => 'admins\/group\/edit', 'app' => 'admin', 'controllerPath' => 'admin', 'controller' => 'group', 'method' => 'edit']);

#regions
route::get(['route' => 'regions\/list', 'app' => 'admin', 'controllerPath' => 'region', 'controller' => 'region', 'method' => 'index']);

#competitions
route::get(['route' => 'competitions\/list', 'app' => 'admin', 'controllerPath' => 'competition', 'controller' => 'competition', 'method' => 'index']);

#sports
route::get(['route' => 'sports\/list', 'app' => 'admin', 'controllerPath' => 'sport', 'controller' => 'sport', 'method' => 'index']);

#sidebars
route::post(['route' => 'sidebars\/edit\/save', 'app' => 'admin', 'controllerPath' => 'sidebar', 'controller' => 'sidebar', 'method' => 'editSave']);
route::get(['route' => 'sidebars\/edit\/{09}', 'app' => 'admin', 'controllerPath' => 'sidebar', 'controller' => 'sidebar', 'method' => 'edit']);
route::get(['route' => 'sidebars', 'app' => 'admin', 'controllerPath' => 'sidebar', 'controller' => 'sidebar', 'method' => 'index']);

#pages
route::post(['route' => 'pages\/edit\/save', 'app' => 'admin', 'controllerPath' => 'page', 'controller' => 'page', 'method' => 'editSave']);
route::get(['route' => 'pages\/edit\/{09}', 'app' => 'admin', 'controllerPath' => 'page', 'controller' => 'page', 'method' => 'edit']);
route::get(['route' => 'pages', 'app' => 'admin', 'controllerPath' => 'page', 'controller' => 'page', 'method' => 'index']);

#menus
route::post(['route' => 'menus\/edit\/save', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'editSave']);
route::get(['route' => 'menus\/edit\/{Az}', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'edit']);

route::get(['route' => 'menus\/get\/sports', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'getSports']);

route::get(['route' => 'menus\/get\/regions', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'getRegions']);
route::get(['route' => 'menus\/get\/region\/{09}', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'getRegions']);

route::get(['route' => 'menus\/get\/competitions', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'getCompetitions']);
route::get(['route' => 'menus\/get\/competition\/{09}', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'getCompetitions']);

route::get(['route' => 'menus', 'app' => 'admin', 'controllerPath' => 'menu', 'controller' => 'menu', 'method' => 'index']);

#swarm services
route::get(['route' => 'swarm\/reload-objects', 'app' => 'admin', 'controllerPath' => 'swarm', 'controller' => 'reload', 'method' => 'reload']);
