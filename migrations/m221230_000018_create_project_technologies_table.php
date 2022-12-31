<?php

use yii\db\Migration;

/**
 * Class m221230_000018_create_project_technologies_table
 */
class m221230_000018_create_project_technologies_table extends Migration
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

        $this->createTable('{{project_technologies}}', [
            'Project_Id' => $this->integer()->notNull(),
            'Technology_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_project_technologies_project','project_technologies','Project_Id','project','IdProject');
        $this->addForeignKey('fk_project_technologies_technology','project_technologies','Technology_Id','technology','IdTechnology');

        $this->addPrimaryKey('pk_project_technologies', 'project_technologies', ['Project_Id','Technology_Id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{project_technologies}}');
    }
}
