<?php

use yii\db\Migration;

/**
 * Class m221230_000016_create_education_technologies_table
 */
class m221230_000016_create_education_technologies_table extends Migration
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

        $this->createTable('{{education_technologies}}', [
            'CurriculumEducation_Id' => $this->integer()->notNull(),
            'Technology_Id' => $this->integer()->notNull(),
            'Type' => "ENUM('1','2','3','4') NOT NULL",
        ], $tableOptions);
        
        $this->addForeignKey('fk_education_technologies_curriculum_education','education_technologies','CurriculumEducation_Id','curriculum_education','IdCurriculumEducation');
        $this->addForeignKey('fk_education_technologies_technology','education_technologies','Technology_Id','technology','IdTechnology');

        $this->addPrimaryKey('pk_education_technologies', 'education_technologies', ['CurriculumEducation_Id','Technology_Id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{education_technologies}}');
    }
}
