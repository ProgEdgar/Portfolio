<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\EducationTechnologies $model */

$this->title = 'Create Education Technologies';
$this->params['breadcrumbs'][] = ['label' => 'Education Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-technologies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
