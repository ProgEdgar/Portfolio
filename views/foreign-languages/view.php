<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ForeignLanguages $model */

$this->title = $model->IdForeignLanguages;
$this->params['breadcrumbs'][] = ['label' => 'Foreign Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="foreign-languages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdForeignLanguages' => $model->IdForeignLanguages], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdForeignLanguages' => $model->IdForeignLanguages], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdForeignLanguages',
            'ST_FLanguage',
            'FLanguage',
            'ST_OralComp',
            'OralComp',
            'ST_Reading',
            'Reading',
            'ST_OralInteraction',
            'OralInteraction',
            'ST_OralProduction',
            'OralProduction',
            'ST_Writing',
            'Writing',
            'CurriculumLanguages_Id',
        ],
    ]) ?>

</div>
