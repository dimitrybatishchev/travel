<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:22 PM
 * To change this template use File | Settings | File Templates.
 */

class Events extends CActiveRecord {

    public function tableName()
    {
        return "events";
    }

    public function primaryKey()
    {
        return "eventId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave(){
        if(!$this->alias){
            $this->alias = Translit::translate($this->name);
        }
        return true;
    }

}