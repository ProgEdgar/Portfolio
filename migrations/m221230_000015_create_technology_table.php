<?php

use yii\db\Migration;

/**
 * Class m221230_000015_create_technology_table
 */
class m221230_000015_create_technology_table extends Migration
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

        $this->createTable('{{technology}}', [
            'IdTechnology' => $this->primaryKey(),
            'Title' => $this->string(50)->notNull(),
            'Technologies_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_technology_technologies','technology','Technologies_Id','technologies','IdTechnologies');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{technology}}');
    }
}
