<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 5/12/14
 * Time: 5:00 PM
 * To change this template use File | Settings | File Templates.
 */

class Countries extends CActiveRecord {

    public function tableName()
    {
        return "countries";
    }

    public function primaryKey()
    {
        return "countryId";
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('relatedDestinationId, shortDescription, fullDescription, alias', 'safe'),
        );
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