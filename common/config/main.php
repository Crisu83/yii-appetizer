<?php

return array(
    'aliases' => array(
        'root' => realpath(dirname(__DIR__) . '/..'),
        'common' => 'root.common',
        'console' => 'root.console',
        // todo: aliases for generated apps should be registered automatically
    ),
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=app',
            'username' => 'root',
            'password' => 'appetizer',
            'charset' => 'utf8',
        ),
    ),
);