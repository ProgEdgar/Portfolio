<?php

use yii\db\Migration;

/**
 * Class m221230_000014_create_project_table
 */
class m221230_000014_create_project_table extends Migration
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

        $this->createTable('{{project}}', [
            'IdProject' => $this->primaryKey(),
            'Title' => $this->string(50)->notNull(),
            'ST_Presentation' => $this->string(20)->notNull(),
            'Pesentation' => $this->string(50)->notNull(),
            'ST_UsedTech' => $this->string(20)->notNull(),
            'ST_CodeSource' => $this->string(20)->notNull(),
            'CodeSource' => $this->string(100)->notNull(),
            'ST_Description' => $this->string(20)->notNull(),
            'Description' => $this->text()->notNull(),
            'Projects_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_project_projects','project','Projects_Id','projects','IdProjects');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{project}}');
    }
}
