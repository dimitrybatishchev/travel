<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:26 PM
 * To change this template use File | Settings | File Templates.
 */

class EventsController extends AdminController {

    public function actionIndex($page = 0){
        $criteria = New CDbCriteria();

        $count = Events::model()->count($criteria);

        $pagination = New CPagination($count);
        $pagination->pageSize = 10;
        $pagination->currentPage = $page;
        $pagination->applyLimit($criteria);

        $pages = $pagination->pageCount;

        $events = Events::model()->findAll($criteria);

        $this->render('index', compact('events', 'pages', 'pagination'));
    }

    public function actionCreate(){
        $model = new Events();

        if(isset($_POST['Events'])){
            $model->attributes = Yii::app()->request->getPost('Events');

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

        $model = Events::model()->findByPk($id);

        if(isset($_POST['Events']))
        {
            $model->attributes = Yii::app()->request->getPost('Events');
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
        Events::model()->findByPk($id)->delete();
        $this->redirect(array('index'));
    }

}