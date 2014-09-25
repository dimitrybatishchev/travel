<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 7:59 PM
 * To change this template use File | Settings | File Templates.
 */

class Destinations extends CActiveRecord {

    public function tableName()
    {
        return "destinations";
    }

    public function primaryKey()
    {
        return "destinationId";
    }

    public function rules()
    {
        return array(
            array('name, alias', 'required'),
        );
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