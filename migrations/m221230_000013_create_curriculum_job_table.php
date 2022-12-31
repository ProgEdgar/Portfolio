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
            'ST_Job' => $this->string(20)->notNull(),
            'Job' => $this->string(100)->notNull(),
            'ST_Since' => $this->string(20)->notNull(),
            'Since' => $this->date(),
            'ST_Local' => $this->string(20)->notNull(),
            'Local' => $this->string(50)->notNull(),
            'ST_Company' => $this->string(20)->notNull(),
            'Company' => $this->string(50)->notNull(),
            'ST_Type' => $this->string(50)->notNull(),
            'Work' => $this->text()->notNull(),
            'Curriculum_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_job_curriculum','curriculum_job','Curriculum_Id','curriculum','IdCurriculum');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum_job}}');
    }
}
