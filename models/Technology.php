<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technology".
 *
 * @property int $IdTechnology
 * @property string $Name
 * @property int $Portfolio_Id
 *
 * @property CurriculumEducation[] $curriculumEducations
 * @property EducationTechnologies[] $educationTechnologies
 * @property Portfolio $portfolio
 * @property ProjectTechnologies[] $projectTechnologies
 * @property Project[] $projects
 */
class Technology extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'technology';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Portfolio_Id'], 'required'],
            [['Portfolio_Id'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['Portfolio_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Portfolio::class, 'targetAttribute' => ['Portfolio_Id' => 'IdPortfolio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdTechnology' => 'Id Technology',
            'Name' => 'Name',
            'Portfolio_Id' => 'Portfolio ID',
        ];
    }

    /**
     * Gets query for [[CurriculumEducations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumEducations()
    {
        return $this->hasMany(CurriculumEducation::class, ['IdCurriculumEducation' => 'CurriculumEducation_Id'])->viaTable('education_technologies', ['Technology_Id' => 'IdTechnology']);
    }

    /**
     * Gets query for [[EducationTechnologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducationTechnologies()
    {
        return $this->hasMany(EducationTechnologies::class, ['Technology_Id' => 'IdTechnology']);
    }

    /**
     * Gets query for [[Portfolio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPortfolio()
    {
        return $this->hasOne(Portfolio::class, ['IdPortfolio' => 'Portfolio_Id']);
    }

    /**
     * Gets query for [[ProjectTechnologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectTechnologies()
    {
        return $this->hasMany(ProjectTechnologies::class, ['Technology_Id' => 'IdTechnology']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::class, ['IdProject' => 'Project_Id'])->viaTable('project_technologies', ['Technology_Id' => 'IdTechnology']);
    }
}
