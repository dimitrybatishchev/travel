<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/23/14
 * Time: 11:45 AM
 * To change this template use File | Settings | File Templates.
 */

class MainModule extends CWebModule {

    public function init(){
        Yii::import("application.modules.main.components.*");
    }

}