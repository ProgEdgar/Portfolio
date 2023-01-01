<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\EducationTechnologies $model */

$this->title = 'Update Education Technologies: ' . $model->CurriculumEducation_Id;
$this->params['breadcrumbs'][] = ['label' => 'Education Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CurriculumEducation_Id, 'url' => ['view', 'CurriculumEducation_Id' => $model->CurriculumEducation_Id, 'Technology_Id' => $model->Technology_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="education-technologies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
