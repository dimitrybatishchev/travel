<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dimitry
 * Date: 9/25/14
 * Time: 10:51 AM
 * To change this template use File | Settings | File Templates.
 */

class Posts extends CActiveRecord {

    public function tableName()
    {
        return "posts";
    }

    public function primaryKey()
    {
        return "postId";
    }

    public function rules()
    {
        return array(
            array('name', 'required'),
            array('alias, shortDescription, fullDescription', 'safe'),
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