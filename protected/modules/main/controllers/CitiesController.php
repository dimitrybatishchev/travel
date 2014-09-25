<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/23/14
 * Time: 11:47 AM
 * To change this template use File | Settings | File Templates.
 */

class CitiesController extends CController {

    public $layout = "//main/layouts/cities";

    public function actionIndex(){
        $this->render('index');
    }

    public function actionCityDetails($cityAlias){
        $this->render('details');
    }

}