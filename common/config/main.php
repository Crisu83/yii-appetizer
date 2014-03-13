<?php

return array(
    'aliases' => array(
        'root' => realpath(dirname(__DIR__) . '/..'),
        'common' => 'root.common',
        'console' => 'root.console',
        // todo: aliases for generated apps should be registered automatically
    ),
);