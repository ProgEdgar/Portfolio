<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $IdContact
 * @property string $Title
 * @property string $Name
 * @property string $ST_Email
 * @property string $Email
 * @property string $ST_PhoneNumber
 * @property string $PhoneNumber
 * @property int $Language_Id
 *
 * @property Language $language
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Name', 'ST_Email', 'Email', 'ST_PhoneNumber', 'PhoneNumber', 'Language_Id'], 'required'],
            [['Language_Id'], 'integer'],
            [['Title', 'ST_Email', 'ST_PhoneNumber', 'PhoneNumber'], 'string', 'max' => 20],
            [['Name'], 'string', 'max' => 30],
            [['Email'], 'string', 'max' => 100],
            [['Language_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['Language_Id' => 'IdLanguage']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdContact' => 'Id Contact',
            'Title' => 'Title',
            'Name' => 'Name',
            'ST_Email' => 'St Email',
            'Email' => 'Email',
            'ST_PhoneNumber' => 'St Phone Number',
            'PhoneNumber' => 'Phone Number',
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
