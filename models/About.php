<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $IdAbout
 * @property string $Title
 * @property string $Description
 * @property string|null $Image
 * @property int $Language_Id
 *
 * @property Language $language
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Description', 'Language_Id'], 'required'],
            [['Description'], 'string'],
            [['Language_Id'], 'integer'],
            [['Title', 'Image'], 'string', 'max' => 20],
            [['Language_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['Language_Id' => 'IdLanguage']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdAbout' => 'Id About',
            'Title' => 'Title',
            'Description' => 'Description',
            'Image' => 'Image',
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
