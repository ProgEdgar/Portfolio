<?php

use yii\db\Migration;

/**
 * Class m221230_000005_create_curriculum_table
 */
class m221230_000005_create_curriculum_table extends Migration
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

        $this->createTable('{{curriculum}}', [
            'IdCurriculum' => $this->primaryKey(),
            'Title' => $this->string(20)->notNull(),
            'ST_Name' => $this->string(20)->notNull(),
            'Name' => $this->string(100)->notNull(),
            'ST_PretendedJob' => $this->string(20)->notNull(),
            'PretendedJob' => $this->string(100)->notNull(),
            'ST_ProfExperience' => $this->string(20)->notNull(),
            'ST_Education' => $this->string(20)->notNull(),
            'ST_Languages' => $this->string(20)->notNull(),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_curriculum_language','curriculum','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{curriculum}}');
    }
}
