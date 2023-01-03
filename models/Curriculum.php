<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum".
 *
 * @property int $IdCurriculum
 * @property string $Title
 * @property string $ST_Name
 * @property string $Name
 * @property string $ST_PretendedJob
 * @property string $PretendedJob
 * @property string $ST_ProfExperience
 * @property string $ST_Education
 * @property string $ST_Languages
 * @property int $Language_Id
 *
 * @property CurriculumEducation[] $curriculumEducations
 * @property CurriculumJob[] $curriculumJobs
 * @property CurriculumLanguages[] $curriculumLanguages
 * @property Language $language
 */
class Curriculum extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curriculum';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'ST_Name', 'Name', 'ST_PretendedJob', 'PretendedJob', 'ST_ProfExperience', 'ST_Education', 'ST_Languages', 'Language_Id'], 'required'],
            [['Language_Id'], 'integer'],
            [['Title', 'ST_Name', 'ST_Education', 'ST_Languages'], 'string', 'max' => 20],
            [['Name', 'PretendedJob'], 'string', 'max' => 100],
            [['ST_PretendedJob', 'ST_ProfExperience'], 'string', 'max' => 50],
            [['Language_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['Language_Id' => 'IdLanguage']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculum' => 'Id Curriculum',
            'Title' => 'Title',
            'ST_Name' => 'St Name',
            'Name' => 'Name',
            'ST_PretendedJob' => 'St Pretended Job',
            'PretendedJob' => 'Pretended Job',
            'ST_ProfExperience' => 'St Prof Experience',
            'ST_Education' => 'St Education',
            'ST_Languages' => 'St Languages',
            'Language_Id' => 'Language ID',
        ];
    }

    /**
     * Gets query for [[CurriculumEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumEducations()
    {
        return $this->hasMany(CurriculumEducation::class, ['Curriculum_Id' => 'IdCurriculum']);
    }

    /**
     * Gets query for [[CurriculumJobs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumJobs()
    {
        return $this->hasMany(CurriculumJob::class, ['Curriculum_Id' => 'IdCurriculum']);
    }

    /**
     * Gets query for [[CurriculumLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumLanguages()
    {
        return $this->hasMany(CurriculumLanguages::class, ['Curriculum_Id' => 'IdCurriculum']);
    }

    /**
     * Gets query for [[Language]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::class, ['IdLanguage' => 'Language_Id']);
    }
}
