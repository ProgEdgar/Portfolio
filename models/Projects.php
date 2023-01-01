<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property int $IdProjects
 * @property string $Title
 * @property int $Language_Id
 *
 * @property Language $language
 * @property Project[] $projects
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projects';
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
            'IdProjects' => 'Id Projects',
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
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Project::class, ['Projects_Id' => 'IdProjects']);
    }
}
