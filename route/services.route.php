<?php
use sys\router as route;
# login
route::cli(['route' => 'update\/all', 'app' => 'services', 'controllerPath' => '', 'controller' => 'update', 'method' => 'update']);
route::cli(['route' => 'update\/sports', 'app' => 'services', 'controllerPath' => '', 'controller' => 'update', 'method' => 'updateSports']);

# region updates
route::cli(['route' => 'update\/regions', 'app' => 'services', 'controllerPath' => '', 'controller' => 'update', 'method' => 'updateRegions']);

# competition updates
route::cli(['route' => 'update\/competition\/{09}', 'app' => 'services', 'controllerPath' => '', 'controller' => 'update', 'method' => 'updateCompetition']);
route::cli(['route' => 'update\/competitions', 'app' => 'services', 'controllerPath' => '', 'controller' => 'update', 'method' => 'updateCompetitions']);
