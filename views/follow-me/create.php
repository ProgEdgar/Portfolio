<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\FollowMe $model */

$this->title = 'Create Follow Me';
$this->params['breadcrumbs'][] = ['label' => 'Follow Mes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="follow-me-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
