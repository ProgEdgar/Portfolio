<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurriculumEducation $model */

$this->title = 'Update Curriculum Education: ' . $model->IdCurriculumEducation;
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdCurriculumEducation, 'url' => ['view', 'IdCurriculumEducation' => $model->IdCurriculumEducation]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curriculum-education-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
