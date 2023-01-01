<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technology".
 *
 * @property int $IdTechnology
 * @property string $Title
 * @property int $Technologies_Id
 *
 * @property CurriculumEducation[] $curriculumEducations
 * @property EducationTechnologies[] $educationTechnologies
 * @property ProjectTechnologies[] $projectTechnologies
 * @property Project[] $projects
 * @property Technologies $technologies
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
            [['Title', 'Technologies_Id'], 'required'],
            [['Technologies_Id'], 'integer'],
            [['Title'], 'string', 'max' => 50],
            [['Technologies_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Technologies::class, 'targetAttribute' => ['Technologies_Id' => 'IdTechnologies']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdTechnology' => 'Id Technology',
            'Title' => 'Title',
            'Technologies_Id' => 'Technologies ID',
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

    /**
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasOne(Technologies::class, ['IdTechnologies' => 'Technologies_Id']);
    }
}
