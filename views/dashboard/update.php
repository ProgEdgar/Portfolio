<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Dashboard $model */

$this->title = 'Update Dashboard: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Dashboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdDashboard' => $model->IdDashboard]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="dashboard-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
