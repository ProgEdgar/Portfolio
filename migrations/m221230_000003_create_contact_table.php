<?php

use yii\db\Migration;

/**
 * Class m221230_000003_create_contact_table
 */
class m221230_000003_create_contact_table extends Migration
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

        $this->createTable('{{contact}}', [
            'IdContact' => $this->primaryKey(),
            'Title' => $this->string(20)->notNull(),
            'Name' => $this->string(30)->notNull(),
            'ST_Email' => $this->string(20)->notNull(),
            'Email' => $this->string(100)->notNull(),
            'ST_PhoneNumber' => $this->string(20)->notNull(),
            'PhoneNumber' => $this->string(20)->notNull(),
            'Language_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_contact_language','contact','Language_Id','language','IdLanguage');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{contact}}');
    }
}
