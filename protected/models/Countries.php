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
        return "country_id";
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
        );
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}