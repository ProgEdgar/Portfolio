<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum_languages".
 *
 * @property int $IdCurriculumLanguages
 * @property string $Name
 * @property string $OralComp
 * @property string $Reading
 * @property string $OralInteraction
 * @property string $OralProduction
 * @property string $Writing
 * @property int $Portfolio_Id
 *
 * @property Portfolio $portfolio
 */
class CurriculumLanguages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curriculum_languages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'OralComp', 'Reading', 'OralInteraction', 'OralProduction', 'Writing', 'Portfolio_Id'], 'required'],
            [['Portfolio_Id'], 'integer'],
            [['Name'], 'string', 'max' => 100],
            [['OralComp', 'Reading', 'OralInteraction', 'OralProduction', 'Writing'], 'string', 'max' => 2],
            [['Portfolio_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Portfolio::class, 'targetAttribute' => ['Portfolio_Id' => 'IdPortfolio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculumLanguages' => 'Id Curriculum Languages',
            'Name' => 'Name',
            'OralComp' => 'Oral Comp',
            'Reading' => 'Reading',
            'OralInteraction' => 'Oral Interaction',
            'OralProduction' => 'Oral Production',
            'Writing' => 'Writing',
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
