<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:26 PM
 * To change this template use File | Settings | File Templates.
 */

class DestinationsController extends AdminController {

    public function actionIndex($page = 0){
        $criteria = New CDbCriteria();

        $count = Destinations::model()->count($criteria);

        $pagination = New CPagination($count);
        $pagination->pageSize = 10;
        $pagination->currentPage = $page;
        $pagination->applyLimit($criteria);

        $pages = $pagination->pageCount;

        $destinations = Destinations::model()->findAll($criteria);

        $this->render('index', compact('destinations', 'pages', 'pagination'));
    }

    public function actionCreate(){
        $model = new Destinations();

        if(isset($_POST['Destinations']))
        {
            $model->attributes = Yii::app()->request->getPost('Destinations');

            if($model->save()){
                $this->redirect(array('index'));
            }
        }

        $this->render('form', array(
            'model'=>$model,
        ));
    }

    public function actionUpdate($id = null){
        if(!$id)
            throw New Exception('Ошибка! Неверное значение идентификатора страны');

        $model = Destinations::model()->findByPk($id);

        if(isset($_POST['Destinations']))
        {
            $model->attributes = Yii::app()->request->getPost('Destinations');
            if($model->save())
                $this->redirect(array('index'));
        }

        $this->render('form', array(
            'model'=>$model,
        ));
    }

    public function actionDelete()
    {
        $id = Yii::app()->request->getPost('id');
        Destinations::model()->findByPk($id)->delete();
        $this->redirect(array('index'));
    }

}