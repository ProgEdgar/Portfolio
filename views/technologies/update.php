<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Technologies $model */

$this->title = 'Update Technologies: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdTechnologies' => $model->IdTechnologies]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="technologies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
