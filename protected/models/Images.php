<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:23 PM
 * To change this template use File | Settings | File Templates.
 */

class Images extends CActiveRecord {

    public function tableName()
    {
        return "images";
    }

    public function primaryKey()
    {
        return "imageId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}