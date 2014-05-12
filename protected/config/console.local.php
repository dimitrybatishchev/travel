<?php

return CMap::mergeArray(
    require(__DIR__ . DIRECTORY_SEPARATOR . 'console.php'),
    array(
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
    ));