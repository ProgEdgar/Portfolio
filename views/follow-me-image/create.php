<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FollowMeImage $model */

$this->title = 'Create Follow Me Image';
$this->params['breadcrumbs'][] = ['label' => 'Follow Me Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-me-image-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
