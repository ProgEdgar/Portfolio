<?php

use app\models\Dashboard;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Dashboards';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dashboard-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Dashboard', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdDashboard',
            'Title',
            'Job',
            'Contact',
            'Image',
            //'Language_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Dashboard $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdDashboard' => $model->IdDashboard]);
                 }
            ],
        ],
    ]); ?>


</div>
