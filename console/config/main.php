<?php

return array(
    'basePath' => dirname(__DIR__),
    'runtimePath' => dirname(__DIR__) . '/runtime',
    'commandMap' => array(
        'generate' => array(
            'class' => '\crisu83\yii_caviar\Command',
            'basePath' => realpath(dirname(__FILE__) . '/../..'),
        ),
    ),
);