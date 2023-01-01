<?php

use app\models\Technology;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technology-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Technology', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTechnology',
            'Title',
            'Technologies_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Technology $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdTechnology' => $model->IdTechnology]);
                 }
            ],
        ],
    ]); ?>


</div>
