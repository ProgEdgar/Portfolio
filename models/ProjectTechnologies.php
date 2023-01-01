<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project_technologies".
 *
 * @property int $Project_Id
 * @property int $Technology_Id
 *
 * @property Project $project
 * @property Technology $technology
 */
class ProjectTechnologies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_technologies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Project_Id', 'Technology_Id'], 'required'],
            [['Project_Id', 'Technology_Id'], 'integer'],
            [['Project_Id', 'Technology_Id'], 'unique', 'targetAttribute' => ['Project_Id', 'Technology_Id']],
            [['Project_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::class, 'targetAttribute' => ['Project_Id' => 'IdProject']],
            [['Technology_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Technology::class, 'targetAttribute' => ['Technology_Id' => 'IdTechnology']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Project_Id' => 'Project ID',
            'Technology_Id' => 'Technology ID',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::class, ['IdProject' => 'Project_Id']);
    }

    /**
     * Gets query for [[Technology]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnology()
    {
        return $this->hasOne(Technology::class, ['IdTechnology' => 'Technology_Id']);
    }
}
