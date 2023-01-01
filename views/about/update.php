<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\About $model */

$this->title = 'Update About: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdAbout' => $model->IdAbout]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="about-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
