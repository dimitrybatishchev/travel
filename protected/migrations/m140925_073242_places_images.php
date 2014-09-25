<?php

class m140925_073242_places_images extends CDbMigration
{
	public function up()
	{
        $this->createTable('placesImages', array(
            "placeImageId" => "pk",
            "relatedPlaceId" => 'int NOT NULL',
            "relatedImageId" => 'int NOT NULL',
        ));
	}

	public function down()
	{
		echo "m140925_073242_places_images does not support migration down.\n";
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