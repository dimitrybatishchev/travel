<?php

class m140925_060004_museums extends CDbMigration
{
	public function up()
	{
        $this->createTable('museums', array(
            "museumId" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "alias" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "shortDescription" => "text DEFAULT NULL",
            "fullDescription" => "text DEFAULT NULL",
            "relatedCityId" => 'int DEFAULT NULL',
            "price" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "timeToVisit" => 'int DEFAULT NULL',
            "rating" => 'int DEFAULT NULL'
        ));
    }

	public function down()
	{
		echo "m140925_060004_museums does not support migration down.\n";
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