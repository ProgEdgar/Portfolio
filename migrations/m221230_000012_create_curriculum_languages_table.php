<?php

use yii\db\Migration;

/**
 * Class m221230_000012_create_curriculum_languages_table
 */
class m221230_000012_create_curriculum_languages_table extends Migration
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

        $this->createTable('{{curriculum_languages}}', [
            'IdCurriculumLanguages' => $this->primaryKey(),
            'Title' => $this->string(50)->notNull(),
            'ST_MLanguage' => $this->string(20)->notNull(),
            'MLanguage' => $this->string(20)->notNull(),
            'ST_OralComp' => $this->string(20)->notNull(),
            'OralComp' => $this->string(2)->notNull(),
            'ST_Reading' => $this->string(20)->notNull(),
            'Reading' => $this->string(2)->notNull(),
            'ST_OralInteraction' => $this->string(20)->notNull(),
            'OralInteraction' => $this->string(2)->notNull(),
            'ST_OralProduction' => $this->string(20)->notNull(),
            'OralProduction' => $this->string(2)->notNull(),
            'ST_Writing' => $this->string(20)->notNull(),
            'Writing' => $this->string(2)->notNull(),
            'Curriculum_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_languages_curriculum','curriculum_languages','Curriculum_Id','curriculum','IdCurriculum');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum_languages}}');
    }
}
