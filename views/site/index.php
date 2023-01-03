<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Basic Programming';
?>
<div class="portfolio-index">
    <div class="dashboard">
        <img id="dash-image" src="<?=Yii::$app->request->baseUrl."/img/my-image1.jpg"?>" alt="Basic Programming Image"/>
        <div class="dashboard-info">
            <span id='dash-info-title'><?=$Dashboard->Title?></span>
            <span id='dash-info-job'><?=$Dashboard->Job?></span>
            <div>
                <a class="buttons"><span id='dash-info-contact-me'><?=$Dashboard->Contact?></span></a>
            </div>
        </div>
    </div>

    <div class="about bg-1">
        <div>
            <img src="<?=Yii::$app->request->baseUrl.'/img/my-image2'?>"/>
        </div>
        <div class="about-info">
            <p><?=$About->Title?></p>
            <p><?=$About->Description?></p>
        </div>
    </div>

    <div class="technologies">
        <div class="technologies-info">
            <p><span><?=$Technologies->Title?></span></p>
        </div>
        <div class="row">
            <?php if($AllTechnologies){ foreach($AllTechnologies as $Technology){ ?>
            <div class="col-auto">
                <div class="blue-ball"></div>
                <p><span>?=$Technology->Title?></span></p>
            </div>
            <?php }} ?>
        </div>
    </div>

    <div class="technologies">
        <div class="technologies-info">
            <p><span><?=$Projects->Title?></span></p>
        </div>
        <div class="row">
            <?php if($AllProjects){ foreach($AllProjects as $Project){ ?>
            <div class="col-auto">
                <div class="project-square">
                    <img src="<?=Yii::$app->request->baseUrl.$Project->Image?>"/>
                    <p><span><?=$Project->Title?></span></p>
                    <p><span><?=$Project->ST_Presentation?>: </span><span><?=$Project->Presentation?></span></p>
                    <p><span><?=$Project->ST_SourceCode?>: </span><span><?=$Project->SourceCode?></span></p>
                    <p>
                        <span><?=$Project->ST_UsedTech?>: </span>
                        <?php if($Project->technologies){ foreach($Project->technologies as $Technology){ ?>
                            <span><?=$Technology->Title?></span>
                        <?php }} ?>
                    </p>
                    <p><span><?=$Project->ST_Description?>: </span><span><?=$Project->Description?></span></p>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>

    <div class="curriculum">
        <div class="curriculum-info">
            <p><span><?=$Curriculum->Title?></span></p>
            <div class="row">
                <div class="col-auto">
                    <div class="blue-ball"></div>
                    <p><span><?=$Curriculum->ST_Name?>: </span><span><?=$Curriculum->Name?></span></p>
                </div>
                <div class="col-auto">
                    <div class="blue-ball"></div>
                    <p><span><?=$Curriculum->ST_PretendedJob?>: </span><span><?=$Curriculum->PretendedJob?></span></p>
                </div>
            </div>
            <p><span><?=$Curriculum->ST_ProfExperience?></span></p>
            <div class="row">
                <?php if($AllJobs){ foreach($AllJobs as $Job){ ?>
                    <div class="col-auto">
                        <div class="blue-ball"></div>
                        <p><span><?=$Job->ST_Job?>: </span><span><?=$Job->Job?></span></p>
                        <p><span><?=$Job->ST_Since?>: </span><span><?=$Job->Since?></span></p>
                        <p><span><?=$Job->ST_Local?>: </span><span><?=$Job->Local?></span></p>
                        <p><span><?=$Job->ST_Company?>: </span><span><?=$Job->Company?></span></p>
                        <p><span><?=$Job->ST_Type?>: </span></p>
                        <p><span><?=$Job->Work?></span></p>
                    </div>
                <?php }} ?>
            </div>
            <p><span><?=$Curriculum->ST_Education?></span></p>
            <div class="row">
                <?php if($AllEducation){ foreach($AllEducation as $Education){ ?>
                    <div class="blue-ball col-1"></div>
                    <div class="col-11">
                        <p><span><?=$Education->ST_Course?>: </span><span><?=$Education->Course?></span></p>
                        <p><span><?=$Education->ST_University?>: </span><span><?=$Education->University?></span></p>
                        <div>
                            <p><span><?=$Education->ST_AcquiredTech?></span></p>
                            <div class="row">
                                <div class="col-3">
                                    <p><span><?=$Education->ST_Programming?> </span></p>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <?php if($Education->educationTechnologies){ foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '1'){?>
                                            <div class="col-4">
                                                <p><span><?=$Tech->technology->Title?> </span></p>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <p><span><?=$Education->ST_OperatingSystem?> </span></p>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <?php if($Education->educationTechnologies){ foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '2'){?>
                                            <div class="col-4">
                                                <p><span><?=$Tech->technology->Title?> </span></p>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <p><span><?=$Education->ST_Frameworks?> </span></p>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <?php if($Education->educationTechnologies){ foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '3'){?>
                                            <div class="col-4">
                                                <p><span><?=$Tech->technology->Title?> </span></p>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <p><span><?=$Education->ST_Tools?> </span></p>
                                </div>
                                <div class="col-9">
                                    <div class="row">
                                        <?php if($Education->educationTechnologies){ foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '4'){?>
                                            <div class="col-4">
                                                <p><span><?=$Tech->technology->Title?> </span></p>
                                            </div>
                                        <?php }}} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p><span><?=$Education->ST_FinalGrade?>: </span><span><?=$Education->FinalGrade?></span></p>
                    </div>
                <?php }} ?>
            </div>
            <p><span><?=$Curriculum->ST_Languages?></span></p>
            <div class="row">
                <div class="blue-ball col-1"></div>
                <div class="col-11">
                    <p><span><?=$CurriculumLanguage->ST_MLanguage?>: </span><span><?=$CurriculumLanguage->MLanguage?></span></p>
                    <div class="row">
                        <div class="col-auto">
                            <p><span><?=$CurriculumLanguage->ST_OralComp?>: </span></p>
                            <p><span><?=$CurriculumLanguage->OralComp?></span></p>
                        </div>
                        <div class="col-auto">
                            <p><span><?=$CurriculumLanguage->ST_Reading?>: </span></p>
                            <p><span><?=$CurriculumLanguage->Reading?></span></p>
                        </div>
                        <div class="col-auto">
                            <p><span><?=$CurriculumLanguage->ST_OralInteraction?>: </span></p>
                            <p><span><?=$CurriculumLanguage->OralInteraction?></span></p>
                        </div>
                        <div class="col-auto">
                            <p><span><?=$CurriculumLanguage->ST_OralProduction?>: </span></p>
                            <p><span><?=$CurriculumLanguage->OralProduction?></span></p>
                        </div>
                        <div class="col-auto">
                            <p><span><?=$CurriculumLanguage->ST_Writing?>: </span></p>
                            <p><span><?=$CurriculumLanguage->Writing?></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($ForeignLanguages){ foreach($ForeignLanguages as $Foreign){ ?>
                <div class="row">
                    <div class="blue-ball col-1"></div>
                    <div class="col-11">
                        <p><span><?=$Foreign->ST_FLanguage?>: </span><span><?=$Foreign->FLanguage?></span></p>
                        <div class="row">
                            <div class="col-auto">
                                <p><span><?=$Foreign->ST_OralComp?>: </span></p>
                                <p><span><?=$Foreign->OralComp?></span></p>
                            </div>
                            <div class="col-auto">
                                <p><span><?=$Foreign->ST_Reading?>: </span></p>
                                <p><span><?=$Foreign->Reading?></span></p>
                            </div>
                            <div class="col-auto">
                                <p><span><?=$Foreign->ST_OralInteraction?>: </span></p>
                                <p><span><?=$Foreign->OralInteraction?></span></p>
                            </div>
                            <div class="col-auto">
                                <p><span><?=$Foreign->ST_OralProduction?>: </span></p>
                                <p><span><?=$Foreign->OralProduction?></span></p>
                            </div>
                            <div class="col-auto">
                                <p><span><?=$Foreign->ST_Writing?>: </span></p>
                                <p><span><?=$Foreign->Writing?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }} ?>
        </div>
    </div>

    <div class="contact">
        <div class="contact-info">
            <p><span><?=$Contact->Title?></span></p>
        </div>
        <div class="row">
            <div class="col-7">
                <p><span><?=$Contact->Name?></span></p>
                <p><span><?=$Contact->ST_Email?>: </span><span><?=$Contact->Email?></span></p>
                <p><span><?=$Contact->ST_PhoneNumber?>: </span><span><?=$Contact->PhoneNumber?></span></p>
            </div>
            <div class="col-5">
                <p><span><?=$FollowMe->Title?></span></p>
                <div class="row">
                    <?php if($FollowImages){ foreach($FollowImages as $Image){ ?>
                        <div class="col-auto">
                            <div>
                                <img src="<?=Yii::$app->request->baseUrl.$Image->Image?>"/>
                                <a href="<?=$Image->Link?>"></a>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>
        </div>
    </div>
</div>
