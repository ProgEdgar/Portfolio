<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "follow_me".
 *
 * @property int $IdFollowMe
 * @property string $Title
 *
 * @property FollowMeImage[] $followMeImages
 */
class FollowMe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'follow_me';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title'], 'required'],
            [['Title'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdFollowMe' => 'Id Follow Me',
            'Title' => 'Title',
        ];
    }

    /**
     * Gets query for [[FollowMeImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFollowMeImages()
    {
        return $this->hasMany(FollowMeImage::class, ['FollowMe_Id' => 'IdFollowMe']);
    }
}
