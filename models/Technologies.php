<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "technologies".
 *
 * @property int $IdTechnologies
 * @property string $Title
 * @property int $Language_Id
 *
 * @property Language $language
 * @property Technology[] $technologies
 */
class Technologies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'technologies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Language_Id'], 'required'],
            [['Language_Id'], 'integer'],
            [['Title'], 'string', 'max' => 20],
            [['Language_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['Language_Id' => 'IdLanguage']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdTechnologies' => 'Id Technologies',
            'Title' => 'Title',
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

    /**
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasMany(Technology::class, ['Technologies_Id' => 'IdTechnologies']);
    }
}
