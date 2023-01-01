<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurriculumJob $model */

$this->title = 'Create Curriculum Job';
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Jobs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-job-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
