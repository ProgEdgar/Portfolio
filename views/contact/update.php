<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Contact $model */

$this->title = 'Update Contact: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdContact' => $model->IdContact]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
