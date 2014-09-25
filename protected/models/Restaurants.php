<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:22 PM
 * To change this template use File | Settings | File Templates.
 */

class Restaurants extends CActiveRecord {

    public function tableName()
    {
        return "restaurants";
    }

    public function primaryKey()
    {
        return "restaurantId";
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function beforeSave(){
        if(!$this->alias){
            $this->alias = Translit::translate($this->title);
        }
        return true;
    }

}