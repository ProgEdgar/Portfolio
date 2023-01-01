<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ProjectTechnologies $model */

$this->title = 'Update Project Technologies: ' . $model->Project_Id;
$this->params['breadcrumbs'][] = ['label' => 'Project Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Project_Id, 'url' => ['view', 'Project_Id' => $model->Project_Id, 'Technology_Id' => $model->Technology_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="project-technologies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
