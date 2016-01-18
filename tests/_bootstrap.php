<?php
// This is global bootstrap for autoloading
error_reporting(-1);

define('YII_ENABLE_ERROR_HANDLER', false);
define('YII_DEBUG', true);
$_SERVER['SCRIPT_NAME'] = '/' . __DIR__;
$_SERVER['SCRIPT_FILENAME'] = __FILE__;

require_once(__DIR__ . '/../vendor/autoload.php');
require_once(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

Yii::setAlias('@scsidisk/tests/unit/yii2/sqlcomment', __DIR__);
Yii::setAlias('@scsidisk/yii2/sqlcomment', dirname(__DIR__));