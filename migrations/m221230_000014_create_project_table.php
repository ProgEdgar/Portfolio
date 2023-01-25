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
            'Title' => $this->string(100)->notNull(),
            'Presentation' => $this->string(100),
            'SourceCode' => $this->string(100),
            'Description' => $this->text()->notNull(),
            'Image' => $this->string(100)->notNull(),
            'Portfolio_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_project_porfolio','project','Portfolio_Id','portfolio','IdPortfolio');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{project}}');
    }
}
