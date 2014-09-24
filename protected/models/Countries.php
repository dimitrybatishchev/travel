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
            array('name, alias', 'required'),
            array('relatedDestinationId, shortDescription, fullDescription', 'safe'),
        );
    }

    static public function model($className = __CLASS__)
    {
        return parent::model($className);
    }

}