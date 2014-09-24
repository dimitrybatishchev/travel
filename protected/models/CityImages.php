<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:23 PM
 * To change this template use File | Settings | File Templates.
 */

class CityImages extends CActiveRecord {

    public function tableName()
    {
        return "cityImages";
    }

    public function primaryKey()
    {
        return "cityImageId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}