<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum_job".
 *
 * @property int $IdCurriculumJob
 * @property string $ST_Job
 * @property string $Job
 * @property string $ST_Since
 * @property string|null $Since
 * @property string $ST_Local
 * @property string $Local
 * @property string $ST_Company
 * @property string $Company
 * @property string $ST_Type
 * @property string $Work
 * @property int $Curriculum_Id
 *
 * @property Curriculum $curriculum
 */
class CurriculumJob extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curriculum_job';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ST_Job', 'Job', 'ST_Since', 'ST_Local', 'Local', 'ST_Company', 'Company', 'ST_Type', 'Work', 'Curriculum_Id'], 'required'],
            [['Since'], 'safe'],
            [['Work'], 'string'],
            [['Curriculum_Id'], 'integer'],
            [['ST_Job', 'ST_Since', 'ST_Local', 'ST_Company'], 'string', 'max' => 20],
            [['Job'], 'string', 'max' => 100],
            [['Local', 'Company', 'ST_Type'], 'string', 'max' => 50],
            [['Curriculum_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Curriculum::class, 'targetAttribute' => ['Curriculum_Id' => 'IdCurriculum']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculumJob' => 'Id Curriculum Job',
            'ST_Job' => 'St Job',
            'Job' => 'Job',
            'ST_Since' => 'St Since',
            'Since' => 'Since',
            'ST_Local' => 'St Local',
            'Local' => 'Local',
            'ST_Company' => 'St Company',
            'Company' => 'Company',
            'ST_Type' => 'St Type',
            'Work' => 'Work',
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
}
