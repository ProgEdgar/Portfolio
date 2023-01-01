<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CurriculumEducation $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curriculum-education-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ST_Course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Course')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_University')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'University')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_AquiredTech')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Programming')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_OperationSystem')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Frameworks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Tools')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_FinalGrade')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FinalGrade')->textInput() ?>

    <?= $form->field($model, 'Curriculum_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
