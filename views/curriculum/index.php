<?php

use app\models\Curriculum;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Curriculums';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Curriculum', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdCurriculum',
            'Title',
            'ST_Name',
            'Name',
            'ST_PretendedJob',
            //'PretendedJob',
            //'ST_ProfExperience',
            //'ST_Education',
            //'ST_Languages',
            //'Language_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Curriculum $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdCurriculum' => $model->IdCurriculum]);
                 }
            ],
        ],
    ]); ?>


</div>
