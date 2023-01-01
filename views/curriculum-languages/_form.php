<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\CurriculumLanguages $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curriculum-languages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_MLanguage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MLanguage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_OralComp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OralComp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Reading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Reading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_OralInteraction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OralInteraction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_OralProduction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'OralProduction')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Writing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Writing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Curriculum_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
