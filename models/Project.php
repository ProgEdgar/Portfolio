<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $IdProject
 * @property string $Title
 * @property string $ST_Presentation
 * @property string|null $Presentation
 * @property string $ST_UsedTech
 * @property string $ST_SourceCode
 * @property string|null $SourceCode
 * @property string $ST_Description
 * @property string $Description
 * @property string $Image
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
            [['Title', 'ST_Presentation', 'ST_UsedTech', 'ST_SourceCode', 'ST_Description', 'Description', 'Image', 'Projects_Id'], 'required'],
            [['Description'], 'string'],
            [['Projects_Id'], 'integer'],
            [['Title', 'Presentation', 'Image'], 'string', 'max' => 50],
            [['ST_Presentation', 'ST_UsedTech', 'ST_SourceCode', 'ST_Description'], 'string', 'max' => 20],
            [['SourceCode'], 'string', 'max' => 100],
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
            'Presentation' => 'Presentation',
            'ST_UsedTech' => 'St Used Tech',
            'ST_SourceCode' => 'St Source Code',
            'SourceCode' => 'Source Code',
            'ST_Description' => 'St Description',
            'Description' => 'Description',
            'Image' => 'Image',
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
