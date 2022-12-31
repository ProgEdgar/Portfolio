<?php

use yii\db\Migration;

/**
 * Class m221230_000008_create_header_table
 */
class m221230_000008_create_header_table extends Migration
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

        $this->createTable('{{header}}', [
            'IdHeader' => $this->primaryKey(),
            'Name' => $this->string(30)->notNull(),
            'Home' => $this->string(20)->notNull(),
            'About' => $this->string(20)->notNull(),
            'Technologies' => $this->string(20)->notNull(),
            'Projects' => $this->string(20)->notNull(),
            'Curriculum' => $this->string(20)->notNull(),
            'Contact' => $this->string(20)->notNull(),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->addForeignKey('fk_language_header','header','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{header}}');
    }
}
