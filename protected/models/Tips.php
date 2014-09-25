<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/25/14
 * Time: 12:56 PM
 * To change this template use File | Settings | File Templates.
 */

class Tips extends CActiveRecord {

    public function tableName()
    {
        return "tips";
    }

    public function primaryKey()
    {
        return "tipId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}