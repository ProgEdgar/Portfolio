<?php

use yii\db\Migration;

/**
 * Class m221230_000017_create_foreign_languages_table
 */
class m221230_000017_create_foreign_languages_table extends Migration
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

        $this->createTable('{{foreign_languages}}', [
            'IdForeignLanguages' => $this->primaryKey(),
            'ST_FLanguage' => $this->string(20)->notNull(),
            'FLanguage' => $this->string(20)->notNull(),
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
            'CurriculumLanguages_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_foreign_languages_curriculum_languages','foreign_languages','CurriculumLanguages_Id','curriculum_languages','IdCurriculumLanguages');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{foreign_languages}}');
    }
}
