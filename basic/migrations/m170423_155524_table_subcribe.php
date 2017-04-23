<?php

use yii\db\Migration;

class m170423_155524_table_subcribe extends Migration
{
    public function up()
    {
        $this->createTable('Subscribe', array(
            'id' => 'pk',
            'email' => 'varchar(50)',
            'date_subscribe' => 'timestamp',
        ));
    }

    public function down()
    {
        echo "m170423_155524_table_subcribe cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
