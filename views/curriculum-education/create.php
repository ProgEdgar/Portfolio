<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurriculumEducation $model */

$this->title = 'Create Curriculum Education';
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-education-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
