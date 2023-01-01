<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Language $model */

$this->title = 'Update Language: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'IdLanguage' => $model->IdLanguage]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="language-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
