<?php

class m140924_171032_utf extends CDbMigration
{
	public function up()
	{
        $this->alterColumn('countries', 'shortDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->alterColumn('countries', 'fullDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->alterColumn('places', 'shortDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->alterColumn('places', 'fullDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->alterColumn('events', 'shortDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->alterColumn('events', 'fullDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');

        $this->addColumn('cities', 'shortDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->addColumn('cities', 'fullDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');

        $this->alterColumn('restaurants', 'shortDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
        $this->alterColumn('restaurants', 'fullDescription', 'text CHARACTER SET utf8 COLLATE utf8_general_ci');
	}

	public function down()
	{
		echo "m140924_171032_utf does not support migration down.\n";
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