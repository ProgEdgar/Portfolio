<?php

use yii\db\Migration;

/**
 * Class m221230_000001_create_portfolio_table
 */
class m221230_000001_create_portfolio_table extends Migration
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

        $this->createTable('{{portfolio}}', [
            'IdPortfolio' => $this->primaryKey(),
            'Language' => $this->string(100)->notNull(),
            'LanguageCode' => $this->string(10)->notNull()->unique(),
            'DashContact' => $this->string(100)->notNull(),
            'DashTitle' => $this->string(100)->notNull(),
            'DashJob' => $this->string(100)->notNull(),
            'DashImage' => $this->string(100)->notNull(),
            'HeaderStart' => $this->string(100)->notNull(),
            'HeaderName' => $this->string(100)->notNull(),
            'STAbout' => $this->string(100)->notNull(),
            'STTechnologies' => $this->string(100)->notNull(),
            'STProjects' => $this->string(100)->notNull(),
            'STCurriculum' => $this->string(100)->notNull(),
            'STContact' => $this->string(100)->notNull(),
            'STFollowMe' => $this->string(100)->notNull(),
            'AboutDescription' => $this->text()->notNull(),
            'AboutImage' => $this->string(100)->notNull(),
            'ProjectSTPresentation' => $this->string(100)->notNull(),
            'ProjectSTUsedTech' => $this->string(100)->notNull(),
            'ProjectSTSourceCode' => $this->string(100)->notNull(),
            'ProjectSTDescription' => $this->string(100)->notNull(),
            'CurriculumSTName' => $this->string(100)->notNull(),
            'CurriculumSTLanguages' => $this->string(100)->notNull(),
            'CurriculumSTEducation' => $this->string(100)->notNull(),
            'CurriculumSTProfExperience' => $this->string(100)->notNull(),
            'CurriculumPretendedJob' => $this->string(100)->notNull(),
            'CurriculumSTPretendedJob' => $this->string(100)->notNull(),
            'CurriculumSTLanguage' => $this->string(100)->notNull(),
            'CurriculumSTOralComp' => $this->string(100)->notNull(),
            'CurriculumSTReading' => $this->string(100)->notNull(),
            'CurriculumSTOralInteraction' => $this->string(100)->notNull(),
            'CurriculumSTOralProduction' => $this->string(100)->notNull(),
            'CurriculumSTWriting' => $this->string(100)->notNull(),
            'CurriculumSTJob' => $this->string(100)->notNull(),
            'CurriculumSTType' => $this->string(100)->notNull(),
            'CurriculumSTCompany' => $this->string(100)->notNull(),
            'CurriculumSTLocal' => $this->string(100)->notNull(),
            'CurriculumSTSince' => $this->string(100)->notNull(),
            'CurriculumSTCourse' => $this->string(100)->notNull(),
            'CurriculumSTUniversity' => $this->string(100)->notNull(),
            'CurriculumSTAcquiredTech' => $this->string(100)->notNull(),
            'CurriculumSTProgramming' => $this->string(100)->notNull(),
            'CurriculumSTOperatingSystem' => $this->string(100)->notNull(),
            'CurriculumSTFrameworks' => $this->string(100)->notNull(),
            'CurriculumSTTools' => $this->string(100)->notNull(),
            'CurriculumSTFinalGrade' => $this->string(100)->notNull(),
            'CurriculumName' => $this->string(100)->notNull(),
            'ContactName' => $this->string(100)->notNull(),
            'ContactSTEmail' => $this->string(100)->notNull(),
            'ContactPhoneNumber' => $this->integer()->notNull(),
            'ContactSTPhoneNumber' => $this->string(100)->notNull(),
            'ContactEmail' => $this->string(100)->notNull(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{portfolio}}');
    }
}
