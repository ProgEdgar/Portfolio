<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Project $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Presentation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pesentation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_UsedTech')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_CodeSource')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CodeSource')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Projects_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
