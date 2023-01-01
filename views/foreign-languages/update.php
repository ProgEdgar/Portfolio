<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ForeignLanguages $model */

$this->title = 'Update Foreign Languages: ' . $model->IdForeignLanguages;
$this->params['breadcrumbs'][] = ['label' => 'Foreign Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdForeignLanguages, 'url' => ['view', 'IdForeignLanguages' => $model->IdForeignLanguages]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="foreign-languages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
