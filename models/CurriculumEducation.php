<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum_education".
 *
 * @property int $IdCurriculumEducation
 * @property string $Course
 * @property string $University
 * @property int $FinalGrade
 * @property int $Portfolio_Id
 *
 * @property EducationTechnologies[] $educationTechnologies
 * @property Portfolio $portfolio
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
            [['Course', 'University', 'FinalGrade', 'Portfolio_Id'], 'required'],
            [['FinalGrade', 'Portfolio_Id'], 'integer'],
            [['Course'], 'string', 'max' => 100],
            [['University'], 'string', 'max' => 200],
            [['Portfolio_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Portfolio::class, 'targetAttribute' => ['Portfolio_Id' => 'IdPortfolio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculumEducation' => 'Id Curriculum Education',
            'Course' => 'Course',
            'University' => 'University',
            'FinalGrade' => 'Final Grade',
            'Portfolio_Id' => 'Portfolio ID',
        ];
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
     * Gets query for [[Portfolio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPortfolio()
    {
        return $this->hasOne(Portfolio::class, ['IdPortfolio' => 'Portfolio_Id']);
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
