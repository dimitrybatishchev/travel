<?php
date_default_timezone_set('UTC');
return array(
    'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
    'import' => array(
        'application.helpers.*',
    ),
    "components"    => array(
        'db' => array(
            'connectionString'      => 'mysql:host=localhost;dbname=travel',
            'autoConnect'           => false,
            'emulatePrepare'        => true,
            'username'              => 'root',
            'password'              => 'Igrima123',
            'charset'               => 'utf8',
            'enableProfiling'       => true,
            'enableParamLogging'    => true,
        ),
    ),
    'params' => array()
);