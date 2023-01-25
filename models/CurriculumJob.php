<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum_job".
 *
 * @property int $IdCurriculumJob
 * @property string $Job
 * @property string|null $Since
 * @property string $Local
 * @property string $Company
 * @property string $Work
 * @property int $Portfolio_Id
 *
 * @property Portfolio $portfolio
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
            [['Job', 'Local', 'Company', 'Work', 'Portfolio_Id'], 'required'],
            [['Since'], 'safe'],
            [['Work'], 'string'],
            [['Portfolio_Id'], 'integer'],
            [['Job', 'Local', 'Company'], 'string', 'max' => 100],
            [['Portfolio_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Portfolio::class, 'targetAttribute' => ['Portfolio_Id' => 'IdPortfolio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculumJob' => 'Id Curriculum Job',
            'Job' => 'Job',
            'Since' => 'Since',
            'Local' => 'Local',
            'Company' => 'Company',
            'Work' => 'Work',
            'Portfolio_Id' => 'Portfolio ID',
        ];
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
}
