<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurriculumJob $model */

$this->title = 'Update Curriculum Job: ' . $model->IdCurriculumJob;
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCurriculumJob, 'url' => ['view', 'IdCurriculumJob' => $model->IdCurriculumJob]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curriculum-job-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
