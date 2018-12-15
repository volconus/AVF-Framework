<?php
$config = [
    'classRoute'            => [],
    'debug' => false,
    'language' => 'english',
    'error_reporting'       => 'E_ALL',
    'db'                    => [
                                    'master' => [
                                        'dsn' => 'pgsql:host=localhost;dbname=test;',
                                        'username' => 'postgres',
                                        'password' => ''
                                    ],
                                ]
];