<?php

class m140512_125400_add extends CDbMigration
{
	public function up()
	{
        $this->createTable("countries", array(
            "country_id" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
        ));
        $this->createTable("cities", array(
            "city_id" => "pk",
            "related_country_id" => "int NOT NULL",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
        ));
        $this->createIndex("related_country_id", "cities", "related_country_id");
	}

	public function down()
	{
        $this->dropTable("countries");
        $this->dropTable("cities");
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