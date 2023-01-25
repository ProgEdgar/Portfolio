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
            'Course' => $this->string(100)->notNull(),
            'University' => $this->string(200)->notNull(),
            'FinalGrade' => $this->integer()->notNull(),
            'Portfolio_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_education_portfolio','curriculum_education','Portfolio_Id','portfolio','IdPortfolio');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum_education}}');
    }
}
