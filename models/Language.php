<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "language".
 *
 * @property int $IdLanguage
 * @property string $Name
 *
 * @property About[] $abouts
 * @property Contact[] $contacts
 * @property Curriculum[] $curriculums
 * @property Dashboard[] $dashboards
 * @property Header[] $headers
 * @property Projects[] $projects
 * @property Technologies[] $technologies
 */
class Language extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'language';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdLanguage' => 'Id Language',
            'Name' => 'Name',
        ];
    }

    /**
     * Gets query for [[Abouts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAbouts()
    {
        return $this->hasMany(About::class, ['Language_Id' => 'IdLanguage']);
    }

    /**
     * Gets query for [[Contacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contact::class, ['Language_Id' => 'IdLanguage']);
    }

    /**
     * Gets query for [[Curriculums]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCurriculums()
    {
        return $this->hasMany(Curriculum::class, ['Language_Id' => 'IdLanguage']);
    }

    /**
     * Gets query for [[Dashboards]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDashboards()
    {
        return $this->hasMany(Dashboard::class, ['Language_Id' => 'IdLanguage']);
    }

    /**
     * Gets query for [[Headers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeaders()
    {
        return $this->hasMany(Header::class, ['Language_Id' => 'IdLanguage']);
    }

    /**
     * Gets query for [[Projects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjects()
    {
        return $this->hasMany(Projects::class, ['Language_Id' => 'IdLanguage']);
    }

    /**
     * Gets query for [[Technologies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTechnologies()
    {
        return $this->hasMany(Technologies::class, ['Language_Id' => 'IdLanguage']);
    }
}
