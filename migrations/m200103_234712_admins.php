<?php

use yii\db\Migration;

/**
 * Class m200103_234712_admins
 */
class m200103_234712_admins extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('admins', [
            'id' => $this->primaryKey(),
            'username' => $this->string(12)->notNull(),
            'password' => $this->string(50)->notNull(),
            'last_name' => $this->string(50)->notNull(),
            'first_name' => $this->string(50)->notNull(),
            'middle_name' => $this->string(50),
            'position' => $this->string(75),
            'avatar' => $this->string(255),
            'auth_key' => $this->string(32),
            'password_reset_token' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('admins');
    }
}
