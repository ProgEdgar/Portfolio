<?php

use yii\db\Migration;

/**
 * Class m221230_000009_create_projects_table
 */
class m221230_000009_create_projects_table extends Migration
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

        $this->createTable('{{projects}}', [
            'IdProjects' => $this->primaryKey(),
            'Title' => $this->string(20)->notNull(),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_projects_language','projects','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{projects}}');
    }
}