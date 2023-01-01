<?php

use app\models\Projects;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Projects';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Projects', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdProjects',
            'Title',
            'Language_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Projects $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdProjects' => $model->IdProjects]);
                 }
            ],
        ],
    ]); ?>


</div>
