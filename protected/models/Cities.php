<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 5/12/14
 * Time: 4:59 PM
 * To change this template use File | Settings | File Templates.
 */

class Cities extends CActiveRecord {

    public function tableName()
    {
        return "cities";
    }

    public function primaryKey()
    {
        return "cityId";
    }

    public function rules()
    {
        return array(
            array('name, alias, relatedCountryId', 'required'),
            array('shortDescription, fullDescription', 'safe'),
        );
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}