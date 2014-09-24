<?php

class m140924_172748_cities_alias extends CDbMigration
{
	public function up()
	{
        $this->addColumn('cities', 'alias', 'varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL');
	}

	public function down()
	{
		echo "m140924_172748_cities_alias does not support migration down.\n";
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