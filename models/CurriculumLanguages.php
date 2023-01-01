<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curriculum_languages".
 *
 * @property int $IdCurriculumLanguages
 * @property string $Title
 * @property string $ST_MLanguage
 * @property string $MLanguage
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
 * @property int $Curriculum_Id
 *
 * @property Curriculum $curriculum
 * @property ForeignLanguages[] $foreignLanguages
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
            [['Title', 'ST_MLanguage', 'MLanguage', 'ST_OralComp', 'OralComp', 'ST_Reading', 'Reading', 'ST_OralInteraction', 'OralInteraction', 'ST_OralProduction', 'OralProduction', 'ST_Writing', 'Writing', 'Curriculum_Id'], 'required'],
            [['Curriculum_Id'], 'integer'],
            [['Title'], 'string', 'max' => 50],
            [['ST_MLanguage', 'MLanguage', 'ST_OralComp', 'ST_Reading', 'ST_OralInteraction', 'ST_OralProduction', 'ST_Writing'], 'string', 'max' => 20],
            [['OralComp', 'Reading', 'OralInteraction', 'OralProduction', 'Writing'], 'string', 'max' => 2],
            [['Curriculum_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Curriculum::class, 'targetAttribute' => ['Curriculum_Id' => 'IdCurriculum']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCurriculumLanguages' => 'Id Curriculum Languages',
            'Title' => 'Title',
            'ST_MLanguage' => 'St M Language',
            'MLanguage' => 'M Language',
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
     * Gets query for [[ForeignLanguages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getForeignLanguages()
    {
        return $this->hasMany(ForeignLanguages::class, ['CurriculumLanguages_Id' => 'IdCurriculumLanguages']);
    }
}
