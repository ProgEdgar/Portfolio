<?php

use yii\db\Migration;

/**
 * Class m221230_000007_create_follow_me_image_table
 */
class m221230_000007_create_follow_me_image_table extends Migration
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

        $this->createTable('{{follow_me_image}}', [
            'IdFollowMeImage' => $this->primaryKey(),
            'Image' => $this->string(50)->notNull(),
            'Link' => $this->string(100)->notNull(),
            'Portfolio_Id' => $this->integer()->notNull(),
        ], $tableOptions);
        
        $this->addForeignKey('fk_follow_me_image_portfolio','follow_me_image','Portfolio_Id','portfolio','IdPortfolio');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{follow_me_image}}');
    }
}
