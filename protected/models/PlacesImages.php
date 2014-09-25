<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/25/14
 * Time: 11:33 AM
 * To change this template use File | Settings | File Templates.
 */

class PlacesImages extends CActiveRecord {

    public function tableName()
    {
        return "placesImages";
    }

    public function primaryKey()
    {
        return "placeImageId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function relations(){
        return array(
            "image" => array(self::BELONGS_TO, "Images", "relatedImageId"),
        );
    }

}