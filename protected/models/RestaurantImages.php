<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:24 PM
 * To change this template use File | Settings | File Templates.
 */

class RestaurantImages extends CActiveRecord {

    public function tableName()
    {
        return "restaurantImages";
    }

    public function primaryKey()
    {
        return "restaurantImageId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}