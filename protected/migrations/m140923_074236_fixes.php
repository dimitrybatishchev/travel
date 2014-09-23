<?php

class m140923_074236_fixes extends CDbMigration
{
	public function up()
	{
        $this->renameColumn('cities', 'related_country_id', 'relatedCountryId');
        $this->renameColumn('cities', 'city_id', 'cityId');
        $this->renameColumn('countries', 'country_id', 'countryId');
	}

	public function down()
	{
		echo "m140923_074236_fixes does not support migration down.\n";
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