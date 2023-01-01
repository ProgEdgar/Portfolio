<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Curriculum $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="curriculum-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_PretendedJob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PretendedJob')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_ProfExperience')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Education')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ST_Languages')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Language_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
