<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Projects $model */

$this->title = 'Update Projects: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdProjects' => $model->IdProjects]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
