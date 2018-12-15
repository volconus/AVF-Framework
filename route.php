<?php

use sys\router as route;

foreach (glob(__DIR__ . '/route/*') as $routeName) {
    include_once($routeName);
}

route::run();