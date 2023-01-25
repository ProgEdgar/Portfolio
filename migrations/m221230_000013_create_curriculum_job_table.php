<?php

use yii\db\Migration;

/**
 * Class m221230_000013_create_curriculum_job_table
 */
class m221230_000013_create_curriculum_job_table extends Migration
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

        $this->createTable('{{curriculum_job}}', [
            'IdCurriculumJob' => $this->primaryKey(),
            'Job' => $this->string(100)->notNull(),
            'Since' => $this->date(),
            'Local' => $this->string(100)->notNull(),
            'Company' => $this->string(100)->notNull(),
            'Work' => $this->text()->notNull(),
            'Portfolio_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_job_portfolio','curriculum_job','Portfolio_Id','portfolio','IdPortfolio');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum_job}}');
    }
}
