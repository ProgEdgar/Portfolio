<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Header $model */

$this->title = 'Update Header: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'IdHeader' => $model->IdHeader]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="header-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
