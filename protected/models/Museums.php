<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/25/14
 * Time: 10:01 AM
 * To change this template use File | Settings | File Templates.
 */

class Museums extends CActiveRecord {

    public function tableName()
    {
        return "museums";
    }

    public function primaryKey()
    {
        return "museumId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }


}