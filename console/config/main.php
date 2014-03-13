<?php

return array(
    'basePath' => dirname(__DIR__),
    'runtimePath' => dirname(__DIR__) . '/runtime',
    'commandMap' => array(
        'generate' => array(
            'class' => 'console\commands\generate\Command'
        ),
    ),
);