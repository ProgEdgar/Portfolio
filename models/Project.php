<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $IdProject
 * @property string $Title
 * @property string $ST_Presentation
 * @property string $Pesentation
 * @property string $ST_UsedTech
 * @property string $ST_CodeSource
 * @property string $CodeSource
 * @property string $ST_Description
 * @property string $Description
 * @property int $Projects_Id
 *
 * @property ProjectTechnologies[] $projectTechnologies
 * @property Projects $projects
 * @property Technology[] $technologies
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'ST_Presentation', 'Pesentation', 'ST_UsedTech', 'ST_CodeSource', 'CodeSource', 'ST_Description', 'Description', 'Projects_Id'], 'required'],
            [['Description'], 'string'],
            [['Projects_Id'], 'integer'],
            [['Title', 'Pesentation'], 'string', 'max' => 50],
            [['ST_Presentation', 'ST_UsedTech', 'ST_CodeSource', 'ST_Description'], 'string', 'max' => 20],
            [['CodeSource'], 'string', 'max' => 100],
            [['Projects_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Projects::class, 'targetAttribute' => ['Projects_Id' => 'IdProjects']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdProject' => 'Id Project',
            'Title' => 'Title',
            'ST_Presentation' => 'St Presentation',
            'Pesentation' => 'Pesentation',
            'ST_UsedTech' => 'St Used Tech',
            'ST_CodeSource' => 'St Code Source',
            'CodeSource' => 'Code Source',
            'ST_Description' => 'St Description',
            'Description' => 'Description',
            'Projects_Id' => 'Projects ID',
        ];
    }

    /**
     * Gets query for [[ProjectTechnologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectTechnologies()
    {
        return $this->hasMany(ProjectTechnologies::class, ['Project_Id' => 'IdProject']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasOne(Projects::class, ['IdProjects' => 'Projects_Id']);
    }

    /**
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasMany(Technology::class, ['IdTechnology' => 'Technology_Id'])->viaTable('project_technologies', ['Project_Id' => 'IdProject']);
    }
}
