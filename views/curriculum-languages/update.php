<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurriculumLanguages $model */

$this->title = 'Update Curriculum Languages: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'IdCurriculumLanguages' => $model->IdCurriculumLanguages]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="curriculum-languages-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
