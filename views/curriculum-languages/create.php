<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\CurriculumLanguages $model */

$this->title = 'Create Curriculum Languages';
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Languages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-languages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
