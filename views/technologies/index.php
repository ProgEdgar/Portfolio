<?php

use app\models\Technologies;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technologies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Technologies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTechnologies',
            'Title',
            'Language_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Technologies $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdTechnologies' => $model->IdTechnologies]);
                 }
            ],
        ],
    ]); ?>


</div>
