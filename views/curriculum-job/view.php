<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CurriculumJob $model */

$this->title = $model->IdCurriculumJob;
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="curriculum-job-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdCurriculumJob' => $model->IdCurriculumJob], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdCurriculumJob' => $model->IdCurriculumJob], [
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
            'IdCurriculumJob',
            'ST_Job',
            'Job',
            'ST_Since',
            'Since',
            'ST_Local',
            'Local',
            'ST_Company',
            'Company',
            'ST_Type',
            'Work:ntext',
            'Curriculum_Id',
        ],
    ]) ?>

</div>
