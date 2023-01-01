<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dashboard".
 *
 * @property int $IdDashboard
 * @property string $Title
 * @property string $Job
 * @property string $Contact
 * @property string|null $Image
 * @property int $Language_Id
 *
 * @property Language $language
 */
class Dashboard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dashboard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Job', 'Contact', 'Language_Id'], 'required'],
            [['Language_Id'], 'integer'],
            [['Title', 'Job'], 'string', 'max' => 100],
            [['Contact'], 'string', 'max' => 20],
            [['Image'], 'string', 'max' => 50],
            [['Language_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::class, 'targetAttribute' => ['Language_Id' => 'IdLanguage']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdDashboard' => 'Id Dashboard',
            'Title' => 'Title',
            'Job' => 'Job',
            'Contact' => 'Contact',
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
