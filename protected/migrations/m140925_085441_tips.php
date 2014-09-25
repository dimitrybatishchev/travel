<?php

class m140925_085441_tips extends CDbMigration
{
	public function up()
	{
        $this->createTable('tips', array(
            "tipId" => "pk",
            "description" => "text DEFAULT NULL",
            "relatedCityId" => 'int DEFAULT NULL',
        ));
    }

	public function down()
	{
		echo "m140925_085441_tips does not support migration down.\n";
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