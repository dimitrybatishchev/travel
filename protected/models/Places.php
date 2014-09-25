<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/24/14
 * Time: 8:00 PM
 * To change this template use File | Settings | File Templates.
 */

class Places extends CActiveRecord {

    public function tableName()
    {
        return "places";
    }

    public function primaryKey()
    {
        return "placeId";
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('alias, shortDescription, fullDescription, relatedCityId, relatedCountryId, price, timeToVisit, rating', 'safe'),
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