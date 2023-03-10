<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Technology $model */

$this->title = 'Create Technology';
$this->params['breadcrumbs'][] = ['label' => 'Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technology-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
