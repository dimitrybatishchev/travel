<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/23/14
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */

class SiteController extends CController {

    public function actionIndex(){
        $this->render('index');
    }

}