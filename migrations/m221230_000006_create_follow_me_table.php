<?php

use yii\db\Migration;

/**
 * Class m221230_000006_create_follow_me_table
 */
class m221230_000006_create_follow_me_table extends Migration
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

        $this->createTable('{{follow_me}}', [
            'IdFollowMe' => $this->primaryKey(),
            'Title' => $this->string(20)->notNull(),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_follow_me_language','about','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{follow_me}}');
    }
}
