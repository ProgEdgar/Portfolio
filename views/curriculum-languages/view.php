<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CurriculumLanguages $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="curriculum-languages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdCurriculumLanguages' => $model->IdCurriculumLanguages], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdCurriculumLanguages' => $model->IdCurriculumLanguages], [
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
            'IdCurriculumLanguages',
            'Title',
            'ST_MLanguage',
            'MLanguage',
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
            'Curriculum_Id',
        ],
    ]) ?>

</div>
