<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ForeignLanguages $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="foreign-languages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ST_FLanguage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FLanguage')->textInput(['maxlength' => true]) ?>

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

    <?= $form->field($model, 'CurriculumLanguages_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
