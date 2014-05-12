<?php

class m140512_125836_added_attractions extends CDbMigration
{
	public function up()
	{
        $this->createTable("attractions", array(
            "attraction_id" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "related_city_id" => "int NOT NULL",
        ));
        $this->createIndex("related_city_id", "attractions", "related_city_id");
	}

	public function down()
	{
        $this->dropTable("attractions");
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