<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\EducationTechnologies $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="education-technologies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CurriculumEducation_Id')->textInput() ?>

    <?= $form->field($model, 'Technology_Id')->textInput() ?>

    <?= $form->field($model, 'Type')->dropDownList([ 1 => '1', 2 => '2', 3 => '3', 4 => '4', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
