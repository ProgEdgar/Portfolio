<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FollowMe $model */

$this->title = 'Update Follow Me: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Follow Mes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdFollowMe' => $model->IdFollowMe]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="follow-me-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
