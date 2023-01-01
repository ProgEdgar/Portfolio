<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "education_technologies".
 *
 * @property int $CurriculumEducation_Id
 * @property int $Technology_Id
 * @property string $Type
 *
 * @property CurriculumEducation $curriculumEducation
 * @property Technology $technology
 */
class EducationTechnologies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'education_technologies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CurriculumEducation_Id', 'Technology_Id', 'Type'], 'required'],
            [['CurriculumEducation_Id', 'Technology_Id'], 'integer'],
            [['Type'], 'string'],
            [['CurriculumEducation_Id', 'Technology_Id'], 'unique', 'targetAttribute' => ['CurriculumEducation_Id', 'Technology_Id']],
            [['CurriculumEducation_Id'], 'exist', 'skipOnError' => true, 'targetClass' => CurriculumEducation::class, 'targetAttribute' => ['CurriculumEducation_Id' => 'IdCurriculumEducation']],
            [['Technology_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Technology::class, 'targetAttribute' => ['Technology_Id' => 'IdTechnology']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'CurriculumEducation_Id' => 'Curriculum Education ID',
            'Technology_Id' => 'Technology ID',
            'Type' => 'Type',
        ];
    }

    /**
     * Gets query for [[CurriculumEducation]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumEducation()
    {
        return $this->hasOne(CurriculumEducation::class, ['IdCurriculumEducation' => 'CurriculumEducation_Id']);
    }

    /**
     * Gets query for [[Technology]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnology()
    {
        return $this->hasOne(Technology::class, ['IdTechnology' => 'Technology_Id']);
    }
}
