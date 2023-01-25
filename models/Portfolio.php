<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $IdPortfolio
 * @property string $Language
 * @property string $LanguageCode
 * @property string $DashContact
 * @property string $DashTitle
 * @property string $DashJob
 * @property string $DashImage
 * @property string $HeaderStart
 * @property string $HeaderName
 * @property string $STAbout
 * @property string $STTechnologies
 * @property string $STProjects
 * @property string $STCurriculum
 * @property string $STContact
 * @property string $STFollowMe
 * @property string $AboutDescription
 * @property string $AboutImage
 * @property string $ProjectSTPresentation
 * @property string $ProjectSTUsedTech
 * @property string $ProjectSTSourceCode
 * @property string $ProjectSTDescription
 * @property string $CurriculumSTName
 * @property string $CurriculumSTLanguages
 * @property string $CurriculumSTEducation
 * @property string $CurriculumSTProfExperience
 * @property string $CurriculumPretendedJob
 * @property string $CurriculumSTPretendedJob
 * @property string $CurriculumSTLanguage
 * @property string $CurriculumSTOralComp
 * @property string $CurriculumSTReading
 * @property string $CurriculumSTOralInteraction
 * @property string $CurriculumSTOralProduction
 * @property string $CurriculumSTWriting
 * @property string $CurriculumSTJob
 * @property string $CurriculumSTType
 * @property string $CurriculumSTCompany
 * @property string $CurriculumSTLocal
 * @property string $CurriculumSTSince
 * @property string $CurriculumSTCourse
 * @property string $CurriculumSTUniversity
 * @property string $CurriculumSTAcquiredTech
 * @property string $CurriculumSTProgramming
 * @property string $CurriculumSTOperatingSystem
 * @property string $CurriculumSTFrameworks
 * @property string $CurriculumSTTools
 * @property string $CurriculumSTFinalGrade
 * @property string $ContactName
 * @property string $ContactSTEmail
 * @property int $ContactPhoneNumber
 * @property string $ContactSTPhoneNumber
 * @property string $ContactEmail
 *
 * @property CurriculumEducation[] $curriculumEducations
 * @property CurriculumJob[] $curriculumJobs
 * @property CurriculumLanguages[] $curriculumLanguages
 * @property FollowMeImage[] $followMeImages
 * @property Project[] $projects
 * @property Technology[] $technologies
 */
class Portfolio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'portfolio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Language', 'LanguageCode', 'DashContact', 'DashTitle', 'DashJob', 'DashImage', 'HeaderStart', 'HeaderName', 'STAbout', 'STTechnologies', 'STProjects', 'STCurriculum', 'STContact', 'STFollowMe', 'AboutDescription', 'AboutImage', 'ProjectSTPresentation', 'ProjectSTUsedTech', 'ProjectSTSourceCode', 'ProjectSTDescription', 'CurriculumSTName', 'CurriculumSTLanguages', 'CurriculumSTEducation', 'CurriculumSTProfExperience', 'CurriculumPretendedJob', 'CurriculumSTPretendedJob', 'CurriculumSTLanguage', 'CurriculumSTOralComp', 'CurriculumSTReading', 'CurriculumSTOralInteraction', 'CurriculumSTOralProduction', 'CurriculumSTWriting', 'CurriculumSTJob', 'CurriculumSTType', 'CurriculumSTCompany', 'CurriculumSTLocal', 'CurriculumSTSince', 'CurriculumSTCourse', 'CurriculumSTUniversity', 'CurriculumSTAcquiredTech', 'CurriculumSTProgramming', 'CurriculumSTOperatingSystem', 'CurriculumSTFrameworks', 'CurriculumSTTools', 'CurriculumSTFinalGrade', 'ContactName', 'ContactSTEmail', 'ContactPhoneNumber', 'ContactSTPhoneNumber', 'ContactEmail'], 'required'],
            [['AboutDescription'], 'string'],
            [['ContactPhoneNumber'], 'integer'],
            [['Language', 'DashContact', 'DashTitle', 'DashJob', 'DashImage', 'HeaderStart', 'HeaderName', 'STAbout', 'STTechnologies', 'STProjects', 'STCurriculum', 'STContact', 'STFollowMe', 'AboutImage', 'ProjectSTPresentation', 'ProjectSTUsedTech', 'ProjectSTSourceCode', 'ProjectSTDescription', 'CurriculumSTName', 'CurriculumSTLanguages', 'CurriculumSTEducation', 'CurriculumSTProfExperience', 'CurriculumPretendedJob', 'CurriculumSTPretendedJob', 'CurriculumSTLanguage', 'CurriculumSTOralComp', 'CurriculumSTReading', 'CurriculumSTOralInteraction', 'CurriculumSTOralProduction', 'CurriculumSTWriting', 'CurriculumSTJob', 'CurriculumSTType', 'CurriculumSTCompany', 'CurriculumSTLocal', 'CurriculumSTSince', 'CurriculumSTCourse', 'CurriculumSTUniversity', 'CurriculumSTAcquiredTech', 'CurriculumSTProgramming', 'CurriculumSTOperatingSystem', 'CurriculumSTFrameworks', 'CurriculumSTTools', 'CurriculumSTFinalGrade', 'ContactName', 'ContactSTEmail', 'ContactSTPhoneNumber', 'ContactEmail'], 'string', 'max' => 100],
            [['LanguageCode'], 'string', 'max' => 10],
            [['LanguageCode'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdPortfolio' => 'Id Portfolio',
            'Language' => 'Language',
            'LanguageCode' => 'Language Code',
            'DashContact' => 'Dash Contact',
            'DashTitle' => 'Dash Title',
            'DashJob' => 'Dash Job',
            'DashImage' => 'Dash Image',
            'HeaderStart' => 'Header Start',
            'HeaderName' => 'Header Name',
            'STAbout' => 'St About',
            'STTechnologies' => 'St Technologies',
            'STProjects' => 'St Projects',
            'STCurriculum' => 'St Curriculum',
            'STContact' => 'St Contact',
            'STFollowMe' => 'St Follow Me',
            'AboutDescription' => 'About Description',
            'AboutImage' => 'About Image',
            'ProjectSTPresentation' => 'Project St Presentation',
            'ProjectSTUsedTech' => 'Project St Used Tech',
            'ProjectSTSourceCode' => 'Project St Source Code',
            'ProjectSTDescription' => 'Project St Description',
            'CurriculumSTName' => 'Curriculum St Name',
            'CurriculumSTLanguages' => 'Curriculum St Languages',
            'CurriculumSTEducation' => 'Curriculum St Education',
            'CurriculumSTProfExperience' => 'Curriculum St Prof Experience',
            'CurriculumPretendedJob' => 'Curriculum Pretended Job',
            'CurriculumSTPretendedJob' => 'Curriculum St Pretended Job',
            'CurriculumSTLanguage' => 'Curriculum St Language',
            'CurriculumSTOralComp' => 'Curriculum St Oral Comp',
            'CurriculumSTReading' => 'Curriculum St Reading',
            'CurriculumSTOralInteraction' => 'Curriculum St Oral Interaction',
            'CurriculumSTOralProduction' => 'Curriculum St Oral Production',
            'CurriculumSTWriting' => 'Curriculum St Writing',
            'CurriculumSTJob' => 'Curriculum St Job',
            'CurriculumSTType' => 'Curriculum St Type',
            'CurriculumSTCompany' => 'Curriculum St Company',
            'CurriculumSTLocal' => 'Curriculum St Local',
            'CurriculumSTSince' => 'Curriculum St Since',
            'CurriculumSTCourse' => 'Curriculum St Course',
            'CurriculumSTUniversity' => 'Curriculum St University',
            'CurriculumSTAcquiredTech' => 'Curriculum St Acquired Tech',
            'CurriculumSTProgramming' => 'Curriculum St Programming',
            'CurriculumSTOperatingSystem' => 'Curriculum St Operating System',
            'CurriculumSTFrameworks' => 'Curriculum St Frameworks',
            'CurriculumSTTools' => 'Curriculum St Tools',
            'CurriculumSTFinalGrade' => 'Curriculum St Final Grade',
            'CurriculumName' => 'Curriculum Name',
            'ContactName' => 'Contact Name',
            'ContactSTEmail' => 'Contact St Email',
            'ContactPhoneNumber' => 'Contact Phone Number',
            'ContactSTPhoneNumber' => 'Contact St Phone Number',
            'ContactEmail' => 'Contact Email',
        ];
    }

    /**
     * Gets query for [[CurriculumEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumEducations()
    {
        return $this->hasMany(CurriculumEducation::class, ['Portfolio_Id' => 'IdPortfolio']);
    }

    /**
     * Gets query for [[CurriculumJobs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumJobs()
    {
        return $this->hasMany(CurriculumJob::class, ['Portfolio_Id' => 'IdPortfolio']);
    }

    /**
     * Gets query for [[CurriculumLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumLanguages()
    {
        return $this->hasMany(CurriculumLanguages::class, ['Portfolio_Id' => 'IdPortfolio']);
    }

    /**
     * Gets query for [[FollowMeImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFollowMeImages()
    {
        return $this->hasMany(FollowMeImage::class, ['Portfolio_Id' => 'IdPortfolio']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::class, ['Portfolio_Id' => 'IdPortfolio']);
    }

    /**
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasMany(Technology::class, ['Portfolio_Id' => 'IdPortfolio']);
    }
}
