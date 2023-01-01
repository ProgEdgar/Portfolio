<?php

use app\models\CurriculumJob;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Curriculum Jobs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-job-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Curriculum Job', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdCurriculumJob',
            'ST_Job',
            'Job',
            'ST_Since',
            'Since',
            //'ST_Local',
            //'Local',
            //'ST_Company',
            //'Company',
            //'ST_Type',
            //'Work:ntext',
            //'Curriculum_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CurriculumJob $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdCurriculumJob' => $model->IdCurriculumJob]);
                 }
            ],
        ],
    ]); ?>


</div>
