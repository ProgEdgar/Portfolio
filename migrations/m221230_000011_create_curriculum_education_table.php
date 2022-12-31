<?php

use yii\db\Migration;

/**
 * Class m221230_000011_create_curriculum_education_table
 */
class m221230_000011_create_curriculum_education_table extends Migration
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

        $this->createTable('{{curriculum_education}}', [
            'IdCurriculumEducation' => $this->primaryKey(),
            'ST_Course' => $this->string(20)->notNull(),
            'Course' => $this->string(100)->notNull(),
            'ST_University' => $this->string(20)->notNull(),
            'University' => $this->string(200)->notNull(),
            'ST_AquiredTech' => $this->string(20)->notNull(),
            'ST_Programming' => $this->string(20)->notNull(),
            'ST_OperationSystem' => $this->string(20)->notNull(),
            'ST_Frameworks' => $this->string(20)->notNull(),
            'ST_Tools' => $this->string(20)->notNull(),
            'ST_FinalGrade' => $this->string(20)->notNull(),
            'FinalGrade' => $this->integer()->notNull(),
            'Curriculum_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_education_curriculum','curriculum_education','Curriculum_Id','curriculum','IdCurriculum');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum_education}}');
    }
}
