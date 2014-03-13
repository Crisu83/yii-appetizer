<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);

defined('STDIN') or define('STDIN', fopen('php://stdin', 'r'));

require(__DIR__ . '/vendor/autoload.php');
require(__DIR__ . '/vendor/yiisoft/yii/framework/yii.php');

$config = ConfigHelper::merge(
    array(
        // base
        __DIR__ . '/common/config/main.php',
        __DIR__ . '/console/config/main.php',
        // todo: add support for environment specific configurations
        // local
        __DIR__ . '/common/config/main-local.php',
        __DIR__ . '/console/config/main-local.php',
    )
);

$app = Yii::createConsoleApplication($config);
$app->commandRunner->addCommands(YII_PATH . '/cli/commands');
$app->run();