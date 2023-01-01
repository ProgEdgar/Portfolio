<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProjectTechnologies $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="project-technologies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Project_Id')->textInput() ?>

    <?= $form->field($model, 'Technology_Id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
