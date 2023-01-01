<?php

use app\models\CurriculumLanguages;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Curriculum Languages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-languages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Curriculum Languages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdCurriculumLanguages',
            'Title',
            'ST_MLanguage',
            'MLanguage',
            'ST_OralComp',
            //'OralComp',
            //'ST_Reading',
            //'Reading',
            //'ST_OralInteraction',
            //'OralInteraction',
            //'ST_OralProduction',
            //'OralProduction',
            //'ST_Writing',
            //'Writing',
            //'Curriculum_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CurriculumLanguages $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdCurriculumLanguages' => $model->IdCurriculumLanguages]);
                 }
            ],
        ],
    ]); ?>


</div>
