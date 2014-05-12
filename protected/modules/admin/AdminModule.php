<?php

class AdminModule extends CWebModule{

    public function init(){
        Yii::import("application.modules.admin.components.*");
    }

}