<?php

class m140924_153125_new_entities extends CDbMigration
{
	public function up()
	{
        $this->createTable('destinations', array(
            "destinationId" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "alias" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
        ));

        $this->insert('destinations', array(
            'name'=>'Африка',
            'alias' =>'africa',
        ));
        $this->insert('destinations', array(
            'name'=>'Антарктика',
            'alias' =>'antarctica',
        ));
        $this->insert('destinations', array(
            'name'=>'Азия',
            'alias' =>'asia',
        ));
        $this->insert('destinations', array(
            'name'=>'Европа',
            'alias' =>'europe',
        ));
        $this->insert('destinations', array(
            'name'=>'Южная Америка',
            'alias' =>'south-america',
        ));
        $this->insert('destinations', array(
            'name'=>'Северная Америка',
            'alias' =>'north-america',
        ));
        $this->insert('destinations', array(
            'name'=>'Ближний Восток',
            'alias' =>'middle-east',
        ));
	}

	public function down()
	{
		echo "m140924_153125_new_entities does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}