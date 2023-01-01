<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Technologies $model */

$this->title = 'Create Technologies';
$this->params['breadcrumbs'][] = ['label' => 'Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="technologies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
