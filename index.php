<?php
    session_start();
    date_default_timezone_set('Asia/Baghdad');

    // CLI'dan erisen servisler icin manipulasyon.
    // Syntax : php index.php [route]
    // Example : php index.php homepage/page1
    if(isset($_SERVER['argv'][0])) {
        $_SERVER['REQUEST_METHOD'] = 'cli';
        $_GET['uri'] = isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] : null;
    }

    include_once __DIR__ . '/sys/core/core.php';

    spl_autoload_register('sys\core::autoload');

    include __DIR__ . '/route.php';

    if(!isset($_SERVER['argv'][0]))
        \sys\core::logConsole();