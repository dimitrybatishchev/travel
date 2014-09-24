<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:27 PM
 * To change this template use File | Settings | File Templates.
 */

class RestaurantsController extends AdminController {

    public function actionIndex($page = 0){
        $criteria = New CDbCriteria();

        $count = Restaurants::model()->count($criteria);

        $pagination = New CPagination($count);
        $pagination->pageSize = 10;
        $pagination->currentPage = $page;
        $pagination->applyLimit($criteria);

        $pages = $pagination->pageCount;

        $restaurants = Restaurants::model()->findAll($criteria);

        $this->render('index', compact('restaurants', 'pages', 'pagination'));
    }

    public function actionCreate(){
        $model = new Restaurants();

        if(isset($_POST['Restaurants']))
        {
            $model->attributes = Yii::app()->request->getPost('Restaurants');

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

        $model = Restaurants::model()->findByPk($id);

        if(isset($_POST['Restaurants']))
        {
            $model->attributes = Yii::app()->request->getPost('Restaurants');
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
        Countries::model()->findByPk($id)->delete();
        $this->redirect(array('index'));
    }

}