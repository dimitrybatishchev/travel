<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:23 PM
 * To change this template use File | Settings | File Templates.
 */

class EventImages extends CActiveRecord {

    public function tableName()
    {
        return "eventImages";
    }

    public function primaryKey()
    {
        return "eventImageId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}