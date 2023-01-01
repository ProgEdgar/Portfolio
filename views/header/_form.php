<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Header $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="header-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Home')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'About')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Technologies')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Projects')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Curriculum')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Contact')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Language_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
