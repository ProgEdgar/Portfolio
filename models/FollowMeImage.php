<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "follow_me_image".
 *
 * @property int $IdFollowMeImage
 * @property string $Image
 * @property string $Link
 * @property int $FollowMe_Id
 *
 * @property FollowMe $followMe
 */
class FollowMeImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'follow_me_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Image', 'Link', 'FollowMe_Id'], 'required'],
            [['FollowMe_Id'], 'integer'],
            [['Image'], 'string', 'max' => 50],
            [['Link'], 'string', 'max' => 100],
            [['FollowMe_Id'], 'exist', 'skipOnError' => true, 'targetClass' => FollowMe::class, 'targetAttribute' => ['FollowMe_Id' => 'IdFollowMe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdFollowMeImage' => 'Id Follow Me Image',
            'Image' => 'Image',
            'Link' => 'Link',
            'FollowMe_Id' => 'Follow Me ID',
        ];
    }

    /**
     * Gets query for [[FollowMe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFollowMe()
    {
        return $this->hasOne(FollowMe::class, ['IdFollowMe' => 'FollowMe_Id']);
    }
}
