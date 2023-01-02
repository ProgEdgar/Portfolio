<?php

use yii\db\Migration;

/**
 * Class m221230_000001_create_language_table
 */
class m221230_000001_create_language_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql'){
            $tableOptions = "CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB";
        }

        $this->createTable('{{language}}', [
            'IdLanguage' => $this->primaryKey(),
            'Name' => $this->string(100)->notNull(),
            'Code' => $this->string(10)->notNull()->unique(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{language}}');
    }
}
