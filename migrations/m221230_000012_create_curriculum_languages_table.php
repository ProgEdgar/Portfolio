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
            'Name' => $this->string(100)->notNull(),
            'OralComp' => $this->string(2)->notNull(),
            'Reading' => $this->string(2)->notNull(),
            'OralInteraction' => $this->string(2)->notNull(),
            'OralProduction' => $this->string(2)->notNull(),
            'Writing' => $this->string(2)->notNull(),
            'Portfolio_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_languages_portfolio','curriculum_languages','Portfolio_Id','portfolio','IdPortfolio');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum_languages}}');
    }
}
