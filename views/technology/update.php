<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Technology $model */

$this->title = 'Update Technology: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdTechnology' => $model->IdTechnology]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="technology-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
