<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user_refresh_token}}`.
 */
class m260630_165914_create_user_refresh_token_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user_refresh_token}}', [
            'id' => $this->primaryKey(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user_refresh_token}}');
    }
}
