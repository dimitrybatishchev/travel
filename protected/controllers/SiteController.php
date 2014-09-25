<?php


class SiteController extends CController{

    public $layout = "//main/layouts/main";

    public function actionIndex(){
        $this->render('index');
    }

}