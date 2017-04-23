<?php

use yii\db\Migration;

class m170423_162906_migrate2 extends Migration
{
    public function up()
    {
        $this->createTable('user', array(
            'id' => 'pk',
            'username' => 'varchar(255)',
            'auth_key' => 'varchar(32)',
            'password_hash' => 'varchar(255)',
            'password_reset_token' => 'varchar(255)',
            'email' => 'varchar(255)',
            'status' => 'smallint(6)',
            'created_at' => 'int(11)',
            'updated_at' => 'int(11)',
        ));
    }

    public function down()
    {
        echo "m170423_162906_migrate2 cannot be reverted.\n";

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
