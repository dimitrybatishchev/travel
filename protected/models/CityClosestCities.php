<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:23 PM
 * To change this template use File | Settings | File Templates.
 */

class CityClosestCities extends CActiveRecord {

    public function tableName()
    {
        return "cityClosestCities";
    }

    public function primaryKey()
    {
        return "closestCityId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}