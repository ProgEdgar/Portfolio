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
            'Name' => $this->string(100)->notNull(),
            'Portfolio_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_technology_portfolio','technology','Portfolio_Id','portfolio','IdPortfolio');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{technology}}');
    }
}
