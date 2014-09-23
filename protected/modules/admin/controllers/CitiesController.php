<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/23/14
 * Time: 11:37 AM
 * To change this template use File | Settings | File Templates.
 */

class CitiesController extends AdminController {

    public function actionIndex($page = 0){
        $criteria = New CDbCriteria();

        $count = Cities::model()->count($criteria);

        $pagination = New CPagination($count);
        $pagination->pageSize = 10;
        $pagination->currentPage = $page;
        $pagination->applyLimit($criteria);

        $pages = $pagination->pageCount;

        $cities = Cities::model()->findAll($criteria);

        $this->render('index', compact('cities', 'pages', 'pagination'));
    }

    public function actionCreate(){
        $model = new Cities();

        if(isset($_POST['Cities']))
        {
            /*
            $model->attributes = Yii::app()->request->getPost('Clients');

            $uploadedImage = CUploadedFile::getInstance($model, 'image');
            $filename =  md5(rand(1000,9999) . time()) . '.' . $uploadedImage->getExtensionName();
            $model->image = $filename;
            */


            if($model->save()){
                //$uploadedImage->saveAs('images/' . $filename);
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

        $model = Cities::model()->findByPk($id);

        if(isset($_POST['Cities']))
        {
            $model->attributes = Yii::app()->request->getPost('Cities');
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
        Cities::model()->findByPk($id)->delete();
        $this->redirect(array('index'));
    }

}