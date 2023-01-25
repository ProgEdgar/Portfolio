<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "follow_me_image".
 *
 * @property int $IdFollowMeImage
 * @property string $Image
 * @property string $Link
 * @property int $Portfolio_Id
 *
 * @property Portfolio $portfolio
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
            [['Image', 'Link', 'Portfolio_Id'], 'required'],
            [['Portfolio_Id'], 'integer'],
            [['Image'], 'string', 'max' => 50],
            [['Link'], 'string', 'max' => 100],
            [['Portfolio_Id'], 'exist', 'skipOnError' => true, 'targetClass' => Portfolio::class, 'targetAttribute' => ['Portfolio_Id' => 'IdPortfolio']],
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
}
