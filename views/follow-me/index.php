<?php

use app\models\FollowMe;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Follow Mes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-me-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Follow Me', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdFollowMe',
            'Title',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, FollowMe $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdFollowMe' => $model->IdFollowMe]);
                 }
            ],
        ],
    ]); ?>


</div>
