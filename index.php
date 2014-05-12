<?php

error_reporting(E_ALL | E_STRICT) ;
ini_set('display_errors', 'On');
session_start();

require_once('framework/yii.php');

$yii = 'framework/yiilite.php';
$config = 'protected/config/main.local.php';
defined('YII_DEBUG') or define('YII_DEBUG',true);

defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
if ( YII_DEBUG ) {
    error_reporting(E_ALL | E_DEPRECATED | E_STRICT);
}

// create a Web application instance and run
Yii::createWebApplication($config)->run();