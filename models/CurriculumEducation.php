<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum_education".
 *
 * @property int $IdCurriculumEducation
 * @property string $ST_Course
 * @property string $Course
 * @property string $ST_University
 * @property string $University
 * @property string $ST_AquiredTech
 * @property string $ST_Programming
 * @property string $ST_OperationSystem
 * @property string $ST_Frameworks
 * @property string $ST_Tools
 * @property string $ST_FinalGrade
 * @property int $FinalGrade
 * @property int $Curriculum_Id
 *
 * @property Curriculum $curriculum
 * @property EducationTechnologies[] $educationTechnologies
 * @property Technology[] $technologies
 */
class CurriculumEducation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curriculum_education';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ST_Course', 'Course', 'ST_University', 'University', 'ST_AquiredTech', 'ST_Programming', 'ST_OperationSystem', 'ST_Frameworks', 'ST_Tools', 'ST_FinalGrade', 'FinalGrade', 'Curriculum_Id'], 'required'],
            [['FinalGrade', 'Curriculum_Id'], 'integer'],
            [['ST_Course', 'ST_University', 'ST_AquiredTech', 'ST_Programming', 'ST_OperationSystem', 'ST_Frameworks', 'ST_Tools', 'ST_FinalGrade'], 'string', 'max' => 20],
            [['Course'], 'string', 'max' => 100],
            [['University'], 'string', 'max' => 200],
            [['Curriculum_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Curriculum::class, 'targetAttribute' => ['Curriculum_Id' => 'IdCurriculum']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculumEducation' => 'Id Curriculum Education',
            'ST_Course' => 'St Course',
            'Course' => 'Course',
            'ST_University' => 'St University',
            'University' => 'University',
            'ST_AquiredTech' => 'St Aquired Tech',
            'ST_Programming' => 'St Programming',
            'ST_OperationSystem' => 'St Operation System',
            'ST_Frameworks' => 'St Frameworks',
            'ST_Tools' => 'St Tools',
            'ST_FinalGrade' => 'St Final Grade',
            'FinalGrade' => 'Final Grade',
            'Curriculum_Id' => 'Curriculum ID',
        ];
    }

    /**
     * Gets query for [[Curriculum]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculum()
    {
        return $this->hasOne(Curriculum::class, ['IdCurriculum' => 'Curriculum_Id']);
    }

    /**
     * Gets query for [[EducationTechnologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEducationTechnologies()
    {
        return $this->hasMany(EducationTechnologies::class, ['CurriculumEducation_Id' => 'IdCurriculumEducation']);
    }

    /**
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasMany(Technology::class, ['IdTechnology' => 'Technology_Id'])->viaTable('education_technologies', ['CurriculumEducation_Id' => 'IdCurriculumEducation']);
    }
}
