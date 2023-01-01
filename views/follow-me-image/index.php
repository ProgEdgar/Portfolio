<?php

use app\models\FollowMeImage;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Follow Me Images';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-me-image-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Follow Me Image', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdFollowMeImage',
            'Image',
            'FollowMe_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FollowMeImage $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdFollowMeImage' => $model->IdFollowMeImage]);
                 }
            ],
        ],
    ]); ?>


</div>
