<?php

use yii\db\Migration;

/**
 * Class m221230_000003_create_about_table
 */
class m221230_000003_create_about_table extends Migration
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

        $this->createTable('{{about}}', [
            'IdAbout' => $this->primaryKey(),
            'Title' => $this->string(20)->notNull(),
            'Description' => $this->text()->notNull(),
            'Image' => $this->string(20),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_about_language','about','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{about}}');
    }
}
