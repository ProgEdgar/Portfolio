<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Basic Programming';
?>
<div class="portfolio-index">
    <?php $form = ActiveForm::begin(); ?>
    <div class="dashboard">
        <img id="dash-image" src="<?=Yii::$app->request->baseUrl."/img/my-image1.jpg"?>" alt="Basic Programming Image"/>
        <div class="dashboard-info">
            <?=$form->field($dashModel, 'Title')->textInput(['class' => 'dash-title', 'maxlength'=>true])->label(false)?>
            <?=$form->field($dashModel, 'Job')->textInput(['class' => 'dash-job', 'maxlength'=>true])->label(false)?>
            <?=$form->field($dashModel, 'Contact')->textInput(['class' => 'dash-contact', 'maxlength'=>true])->label(false)?>
        </div>
        <div class="admin dashboard-buttons">
            <div id='dash-image-button'>
                <a id='dash-tag-a-image-button' class='buttons' onclick="ChangeDashImage()">
                    <img id='image-button' src='<?=Yii::$app->request->baseUrl."/img/download.png"?>'/>
                    <span class="button-text">Image</span>
                </a>
                <?=$form->field($dashModel, 'Image')->textInput(['id' => 'dash-image'])->label(false);?>
            </div>
            <div id="dash-save-button">
                <?=Html::submitButton('Save Dashboard', ['class' => 'buttons'])?>
            </div>
        </div>
    </div>
    <div class="about">
        <div>
            <img src="<?=Yii::$app->request->baseUrl.'/img/my-image2'?>"/>
        </div>
        <div class="about-info">
            <?=$form->field($aboutModel, 'Title')->textInput(['class' => 'about-title', 'maxlength'=>true])->label(false)?>
            <?=$form->field($aboutModel, 'Description')->textInput(['class' => 'description-job', 'maxlength'=>true])->label(false)?>
        </div>
        <div class="admin about-buttons">
            <div id='about-image-button'>
                <a class='about-tag-a-image-button' class='buttons' onclick="ChangeAboutImage()">
                    <img id='image-button' src='<?=Yii::$app->request->baseUrl."/img/download.png"?>'/>
                    <span class="button-text">Image</span>
                </a>
                <?=$form->field($aboutModel, 'Image')->textInput(['id' => 'about-image'])->label(false);?>
            </div>
            <div id="about-save-button">
                <?=Html::submitButton('Save Aboutboard', ['class' => 'buttons'])?>
            </div>
        </div>
    </div>
    <div class="technologies">






        <div class="technologies-info">
            <?=$form->field($technologiesModel, 'Title')->textInput(['class' => 'technologies-title', 'maxlength'=>true])->label(false)?>
        </div>
        <div class="row">
            <?php $num = 1; if($AllTechnologies){ foreach($AllTechnologies as $Technology){ ?>
            <div class="col-auto" id='tech-div-clone-<?=$num?>'>
                <div class="blue-ball"></div>
                <p id='tech-title-<?=$num?>'><?=$Technology->Title?></p>
            </div>
            <?php $num++; }} ?>
            <div class="col-auto">
                <a class="green-ball buttons" id='tech-button-add' onclick="return AddNewTechnology()"></a>
                <?=$form->field($technologiesModel, 'Title')->textInput(['id' => 'tech-add-new', 'maxlength'=>true])->label(false)?>
            </div>
            <div class="col-auto to-clone" id='tech-div-clone-0'>
                <div class="blue-ball"></div>
                <p id='tech-title-0'></p>
            </div>
        </div>










        <div class="admin about-buttons">
            <div id='about-image-button'>
                <a class='about-tag-a-image-button' class='buttons' onclick="ChangeAboutImage()">
                    <img id='image-button' src='<?=Yii::$app->request->baseUrl."/img/download.png"?>'/>
                    <span class="button-text">Image</span>
                </a>
                <?=$form->field($aboutModel, 'Image')->textInput(['id' => 'about-image'])->label(false);?>
            </div>
            <div id="about-save-button">
                <?=Html::submitButton('Save Aboutboard', ['class' => 'buttons'])?>
            </div>
        </div>
    </div>
</div>
