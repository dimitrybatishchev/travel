<?php

class m140925_064955_posts extends CDbMigration
{
	public function up()
	{
        $this->createTable('posts', array(
            "postId" => "pk",
            "name" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "alias" => "varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL",
            "shortDescription" => "text DEFAULT NULL",
            "fullDescription" => "text DEFAULT NULL",
            "type" => "enum('news', 'article') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'news'"
        ));
	}

	public function down()
	{
		echo "m140925_064955_posts does not support migration down.\n";
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