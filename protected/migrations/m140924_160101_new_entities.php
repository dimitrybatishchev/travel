<?php

class m140924_160101_new_entities extends CDbMigration
{
	public function up()
	{
        $this->dropTable('attractions');
        $this->createTable('places', array(
            "placeId" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "alias" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "shortDescription" => "text DEFAULT NULL",
            "fullDescription" => "text DEFAULT NULL",
            "relatedCityId" => 'int DEFAULT NULL',
            "relatedCountryId" => 'int DEFAULT NULL',
            "price" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "timeToVisit" => 'int DEFAULT NULL',
            "rating" => 'int DEFAULT NULL'
        ));

        $this->addColumn('countries', 'relatedDestinationId', 'int NOT NULL');
        $this->addColumn('countries', 'visa', "enum('no','yes') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'no'");
        $this->addColumn('cities', 'type', "enum('resort','adventure') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'adventure'");

        $this->createTable('events', array(
            "eventId" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "alias" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "startTime" => "text DEFAULT NULL",
            "endTime" => "text DEFAULT NULL",
            "shortDescription" => "text DEFAULT NULL",
            "fullDescription" => "text DEFAULT NULL",
            "relatedCityId" => 'int DEFAULT NULL',
            "relatedCountryId" => 'int DEFAULT NULL',
        ));

        $this->createTable('restaurants', array(
            "restaurantId" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "alias" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "price" => "int NOT NULL",
            "shortDescription" => "text DEFAULT NULL",
            "fullDescription" => "text DEFAULT NULL",
            "relatedCityId" => 'int DEFAULT NULL',
        ));

        $this->createTable('cityClosestCities', array(
            "closestCityId" => "pk",
            "relatedMainCityId" => 'int NOT NULL',
            "relatedChildCityId" => 'int NOT NULL',
        ));

        $this->createTable('images', array(
            "imageId" => "pk",
            "original" => 'varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL',
            "thumbnail" => 'varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL',
        ));

        $this->createTable('cityImages', array(
            "cityImageId" => "pk",
            "relatedCityId" => 'int NOT NULL',
            "relatedImageId" => 'int NOT NULL',
        ));

        $this->createTable('countryImages', array(
            "countryImageId" => "pk",
            "relatedCountryId" => 'int NOT NULL',
            "relatedImageId" => 'int NOT NULL',
        ));

        $this->createTable('eventImages', array(
            "eventImageId" => "pk",
            "relatedEventId" => 'int NOT NULL',
            "relatedImageId" => 'int NOT NULL',
        ));

        $this->createTable('restaurantImages', array(
            "restaurantImageId" => "pk",
            "relatedRestaurantId" => 'int NOT NULL',
            "relatedImageId" => 'int NOT NULL',
        ));
    }

	public function down()
	{
		echo "m140924_160101_new_entities does not support migration down.\n";
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