<?php

class AdminController extends CController{

    public $layout = "//admin/layouts/main";

    public function beforeAction($action){
        if(Yii::app()->user->isGuest)
            Header("Location: /admin/sign/in");
        return true;
    }

}