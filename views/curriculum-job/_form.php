<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CurriculumJob $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curriculum-job-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ST_Job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Since')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Since')->textInput() ?>

    <?= $form->field($model, 'ST_Local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Local')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Work')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Curriculum_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
