<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "foreign_languages".
 *
 * @property int $IdForeignLanguages
 * @property string $ST_FLanguage
 * @property string $FLanguage
 * @property string $ST_OralComp
 * @property string $OralComp
 * @property string $ST_Reading
 * @property string $Reading
 * @property string $ST_OralInteraction
 * @property string $OralInteraction
 * @property string $ST_OralProduction
 * @property string $OralProduction
 * @property string $ST_Writing
 * @property string $Writing
 * @property int $CurriculumLanguages_Id
 *
 * @property CurriculumLanguages $curriculumLanguages
 */
class ForeignLanguages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foreign_languages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ST_FLanguage', 'FLanguage', 'ST_OralComp', 'OralComp', 'ST_Reading', 'Reading', 'ST_OralInteraction', 'OralInteraction', 'ST_OralProduction', 'OralProduction', 'ST_Writing', 'Writing', 'CurriculumLanguages_Id'], 'required'],
            [['CurriculumLanguages_Id'], 'integer'],
            [['ST_FLanguage', 'FLanguage', 'ST_OralComp', 'ST_Reading', 'ST_OralInteraction', 'ST_OralProduction', 'ST_Writing'], 'string', 'max' => 20],
            [['OralComp', 'Reading', 'OralInteraction', 'OralProduction', 'Writing'], 'string', 'max' => 2],
            [['CurriculumLanguages_Id'], 'exist', 'skipOnError' => true, 'targetClass' => CurriculumLanguages::class, 'targetAttribute' => ['CurriculumLanguages_Id' => 'IdCurriculumLanguages']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdForeignLanguages' => 'Id Foreign Languages',
            'ST_FLanguage' => 'St F Language',
            'FLanguage' => 'F Language',
            'ST_OralComp' => 'St Oral Comp',
            'OralComp' => 'Oral Comp',
            'ST_Reading' => 'St Reading',
            'Reading' => 'Reading',
            'ST_OralInteraction' => 'St Oral Interaction',
            'OralInteraction' => 'Oral Interaction',
            'ST_OralProduction' => 'St Oral Production',
            'OralProduction' => 'Oral Production',
            'ST_Writing' => 'St Writing',
            'Writing' => 'Writing',
            'CurriculumLanguages_Id' => 'Curriculum Languages ID',
        ];
    }

    /**
     * Gets query for [[CurriculumLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculumLanguages()
    {
        return $this->hasOne(CurriculumLanguages::class, ['IdCurriculumLanguages' => 'CurriculumLanguages_Id']);
    }
}
