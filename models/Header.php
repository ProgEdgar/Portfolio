<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $IdHeader
 * @property string $Name
 * @property string $Home
 * @property string $About
 * @property string $Technologies
 * @property string $Projects
 * @property string $Curriculum
 * @property string $Contact
 * @property int $Language_Id
 *
 * @property Language $language
 */
class Header extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Home', 'About', 'Technologies', 'Projects', 'Curriculum', 'Contact', 'Language_Id'], 'required'],
            [['Language_Id'], 'integer'],
            [['Name'], 'string', 'max' => 30],
            [['Home', 'About', 'Technologies', 'Projects', 'Curriculum', 'Contact'], 'string', 'max' => 20],
            [['Language_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['Language_Id' => 'IdLanguage']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdHeader' => 'Id Header',
            'Name' => 'Name',
            'Home' => 'Home',
            'About' => 'About',
            'Technologies' => 'Technologies',
            'Projects' => 'Projects',
            'Curriculum' => 'Curriculum',
            'Contact' => 'Contact',
            'Language_Id' => 'Language ID',
        ];
    }

    /**
     * Gets query for [[Language]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::class, ['IdLanguage' => 'Language_Id']);
    }
}
