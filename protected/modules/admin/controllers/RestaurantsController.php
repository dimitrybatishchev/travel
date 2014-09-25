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
                if(isset($_POST['AddedImages'])){
                    $addedImages = Yii::app()->request->getPost('AddedImages');

                    foreach($model->images as $oldImage){
                        if (!in_array($oldImage->restaurantImageId, $addedImages)){
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

                            $placeImage = new RestaurantImages();
                            $placeImage->relatedRestaurantId = $model->restaurantId;
                            $placeImage->relatedImageId = $image->imageId;
                            $placeImage->save();

                            $uploadedImage->saveAs('content/restaurants/' . $filename);
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

        $model = Restaurants::model()->findByPk($id);

        if(isset($_POST['Restaurants']))
        {
            $model->attributes = Yii::app()->request->getPost('Restaurants');
            if($model->save()){
                if(isset($_POST['AddedImages'])){
                    $addedImages = Yii::app()->request->getPost('AddedImages');

                    foreach($model->images as $oldImage){
                        if (!in_array($oldImage->restaurantImageId, $addedImages)){
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

                            $placeImage = new RestaurantImages();
                            $placeImage->relatedRestaurantId = $model->restaurantId;
                            $placeImage->relatedImageId = $image->imageId;
                            $placeImage->save();

                            $uploadedImage->saveAs('content/restaurants/' . $filename);
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

    public function actionDelete()
    {
        $id = Yii::app()->request->getPost('id');
        Countries::model()->findByPk($id)->delete();
        $this->redirect(array('index'));
    }

}