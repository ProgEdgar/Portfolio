<?php

use yii\db\Migration;

/**
 * Class m221230_000005_create_dashboard_table
 */
class m221230_000005_create_dashboard_table extends Migration
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

        $this->createTable('{{dashboard}}', [
            'IdDashboard' => $this->primaryKey(),
            'Title' => $this->string(100)->notNull(),
            'Job' => $this->string(100)->notNull(),
            'Contact' => $this->string(20)->notNull(),
            'Image' => $this->string(50),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_dashboard_language','dashboard','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{dashboard}}');
    }
}
