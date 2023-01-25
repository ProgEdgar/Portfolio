<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $IdProject
 * @property string $Title
 * @property string|null $Presentation
 * @property string|null $SourceCode
 * @property string $Description
 * @property string $Image
 * @property int $Portfolio_Id
 *
 * @property Portfolio $portfolio
 * @property ProjectTechnologies[] $projectTechnologies
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
            [['Title', 'Description', 'Image', 'Portfolio_Id'], 'required'],
            [['Description'], 'string'],
            [['Portfolio_Id'], 'integer'],
            [['Title', 'Presentation', 'SourceCode', 'Image'], 'string', 'max' => 100],
            [['Portfolio_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Portfolio::class, 'targetAttribute' => ['Portfolio_Id' => 'IdPortfolio']],
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
            'Presentation' => 'Presentation',
            'SourceCode' => 'Source Code',
            'Description' => 'Description',
            'Image' => 'Image',
            'Portfolio_Id' => 'Portfolio ID',
        ];
    }

    /**
     * Gets query for [[Portfolio]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPortfolio()
    {
        return $this->hasOne(Portfolio::class, ['IdPortfolio' => 'Portfolio_Id']);
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
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasMany(Technology::class, ['IdTechnology' => 'Technology_Id'])->viaTable('project_technologies', ['Project_Id' => 'IdProject']);
    }
}
