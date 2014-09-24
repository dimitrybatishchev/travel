<?php

class m140924_165137_countries_description extends CDbMigration
{
	public function up()
	{
        $this->addColumn('countries', 'shortDescription', 'text DEFAULT NULL');
        $this->addColumn('countries', 'fullDescription', 'text DEFAULT NULL');
	}

	public function down()
	{
		echo "m140924_165137_countries_description does not support migration down.\n";
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