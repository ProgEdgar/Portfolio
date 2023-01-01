<?php

use app\models\ForeignLanguages;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Foreign Languages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="foreign-languages-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Foreign Languages', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdForeignLanguages',
            'ST_FLanguage',
            'FLanguage',
            'ST_OralComp',
            'OralComp',
            //'ST_Reading',
            //'Reading',
            //'ST_OralInteraction',
            //'OralInteraction',
            //'ST_OralProduction',
            //'OralProduction',
            //'ST_Writing',
            //'Writing',
            //'CurriculumLanguages_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ForeignLanguages $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdForeignLanguages' => $model->IdForeignLanguages]);
                 }
            ],
        ],
    ]); ?>


</div>
