<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FollowMeImage $model */

$this->title = 'Update Follow Me Image: ' . $model->IdFollowMeImage;
$this->params['breadcrumbs'][] = ['label' => 'Follow Me Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdFollowMeImage, 'url' => ['view', 'IdFollowMeImage' => $model->IdFollowMeImage]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="follow-me-image-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
