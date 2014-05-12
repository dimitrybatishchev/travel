<?php

class SignController extends CController{

    public function actionIn(){
        if(!Yii::app()->user->isGuest)
            Header('Location: /admin/site/index');
        $form = Yii::app()->request->getPost('sf');
        if($form){
            if($form['username'] && $form['pass']){
                if($form['username'] == 'admin' && $form['pass'] == 'admin'){
                    Yii::app()->user->id = 'admin';
                    Header('Location: /admin/site/index');
                }
            }
        }
        $this->renderPartial('in');
    }

    public function actionOut(){
        Yii::app()->user->logout();
        Header('Location: /admin/sign/in');
    }

}