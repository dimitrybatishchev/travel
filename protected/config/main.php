<?php
date_default_timezone_set('UTC');
return array(
    'name'                  => 'Travel',
    'defaultController'     => 'site',
    'sourceLanguage'        => 'ru',
    'theme'                 => 'main',
    'import' => array(
        'application.models.*',
        'application.helpers.*',
    ),
    'modules' => array(
        "main",
        "admin",
    ),
    "preload" => array(),
    "components"    => array(
        'urlManager'    =>array(
            'urlFormat'     =>'path',
            'rules'=>array(
                '/city/<cityAlias>'                                     => 'main/cities/cityDetails',
                '/travel/<destinationAlias>'                            => 'main/destinations/destinationDetails',
                '/travel/<destinationAlias>/<countryAlias>'             => 'main/countries/countryDetails',
                '/travel/<destinationAlias>/<countryAlias>/<cityAlias>' => 'main/cities/cityDetails',
                '/' => 'main/site/index',
            ),
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