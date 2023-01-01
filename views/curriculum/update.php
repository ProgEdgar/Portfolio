<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Curriculum $model */

$this->title = 'Update Curriculum: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Curriculums', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdCurriculum' => $model->IdCurriculum]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curriculum-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
