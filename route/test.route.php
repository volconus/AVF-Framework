<?php
use sys\router as route;

# test
//route::get('test', 'admin/test/test@getTest');

route::cli(['route' => 'test', 'app' => 'test', 'controllerPath' => '', 'controller' => 'test', 'method' => 'index']);
route::get(['route' => 'v', 'app' => 'test', 'controllerPath' => '', 'controller' => 'test', 'method' => 'index']);
