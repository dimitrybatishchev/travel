<?php
date_default_timezone_set('UTC');
return array(
    'name'                  => 'Travel',
    'defaultController'     => 'site',
    'sourceLanguage'        => 'ru',
    'theme'                 => 'main',
    'import' => array(
        'application.models.*',
    ),
    'modules' => array(
        "admin",
    ),
    "preload" => array(),
    "components"    => array(
        'urlManager'    =>array(
            'urlFormat'     =>'path',
        ),
        'db' => array(
            'connectionString'      => 'mysql:host=localhost;dbname=travel',
            'autoConnect'           => false,
            'emulatePrepare'        => true,
            'username'              => 'root',
            'password'              => 'Tre13ieme',
            'charset'               => 'utf8',
            'enableProfiling'       => true,
            'enableParamLogging'    => true,
        ),
        "cache" => array(
            "class" => "CFileCache",
        )
    ),
    'params' => array()
);