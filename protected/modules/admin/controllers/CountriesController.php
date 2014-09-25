<?php

class CountriesController extends AdminController
{

    public function actionIndex($page = 0){
        $criteria = New CDbCriteria();

        $count = Countries::model()->count($criteria);

        $pagination = New CPagination($count);
        $pagination->pageSize = 10;
        $pagination->currentPage = $page;
        $pagination->applyLimit($criteria);

        $pages = $pagination->pageCount;

        $countries = Countries::model()->findAll($criteria);

        $this->render('index', compact('countries', 'pages', 'pagination'));
    }

    public function actionCreate(){
        $model = new Countries();

        if(isset($_POST['Countries']))
        {
            $model->attributes = Yii::app()->request->getPost('Countries');

            if($model->save()){
                if(isset($_POST['AddedImages'])){
                    $addedImages = Yii::app()->request->getPost('AddedImages');

                    foreach($model->images as $oldImage){
                        if (!in_array($oldImage->countryImageId, $addedImages)){
                            $oldImage->delete();
                        }
                    }
                }

                if (isset($_FILES['Images'])){
                    for($i=0; $i < count($_FILES['Images']['name']); $i++) {
                        $uploadedImage = CUploadedFile::getInstanceByName("Images[$i]");
                        if ($uploadedImage){
                            $filename =  md5(rand(1000,9999) . time()) . '.' . $uploadedImage->getExtensionName();

                            $image = new Images();
                            $image->original = $filename;
                            $image->save();

                            $placeImage = new CountriesImages();
                            $placeImage->relatedCountryId = $model->countryId;
                            $placeImage->relatedImageId = $image->imageId;
                            $placeImage->save();

                            $uploadedImage->saveAs('content/countries/' . $filename);
                        }
                    }
                }

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

        $model = Countries::model()->findByPk($id);

        if(isset($_POST['Countries']))
        {
            $model->attributes = Yii::app()->request->getPost('Countries');
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