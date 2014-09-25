<?php

class m140925_061044_dates_in_places_fix extends CDbMigration
{
	public function up()
	{
        $this->alterColumn('events', 'startTime', 'DATE');
        $this->alterColumn('events', 'endTime', 'DATE');
	}

	public function down()
	{
		echo "m140925_061044_dates_in_places_fix does not support migration down.\n";
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