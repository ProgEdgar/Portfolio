<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Basic Programming';
?>
<div class="portfolio-index">
    <div id="<?=str_replace(' ','_',$Header->Name)?>">
        <div class="relative">
            <img id="dash-image" src="<?=Yii::$app->request->baseUrl."/img/my-image1.jpg"?>" alt="Basic Programming Image"/>
            <div class="dashboard-info absolute">
                <div class="div-name"><span class="text-30-white-bold"><?=$Dashboard->Title?></span></div>
                <div class="div-job"><span class="text-25-white-bold"><?=$Dashboard->Job?></span></div>
                <div class="div-contact-button">
                    <a class="buttons contact-button"><?=$Dashboard->Contact?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-1 section" id="about">
        <div class="row">
            <div class="div-title col-12"><span class="text-30-bold"><?=$About->Title?></span></div>
            <div class="col-auto">
                <img id="about-image" src="<?=Yii::$app->request->baseUrl.'/img/my-image2'?>"/>
            </div>
            <div class="div-about-description col"><span class="text-25"><?=$About->Description?></span></div>
        </div>
    </div>

    <div class="bg-2 section" id="technologies">
        <div class="row justify-center">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Technologies->Title?></span></div>
            <div class="row col-12 justify-center">
                <?php if($AllTechnologies){ foreach($AllTechnologies as $Technology){ ?>
                <div class="col-auto row div-blue-ball text-center">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-25-bold"><?=$Technology->Title?></span></div>
                </div>
                <?php }} ?>
            </div>
        </div>
    </div>

    <div class="bg-1 section" id="projects">
        <div class="row">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Projects->Title?></span></div>
        </div>
        <div class="projects">
            <?php if($AllProjects){ foreach($AllProjects as $Project){ ?>
                <div class="slide">
                    <div class="project-square w-75 m-auto">
                        <img class="w-100" src="<?=Yii::$app->request->baseUrl.$Project->Image?>"/>
                        <p class="text-center"><span class="text-25-bold"><?=$Project->Title?></span></p>
                        <p><span class="text-20-bold"><?=$Project->ST_Presentation?>: </span><span class="text-20"><?=$Project->Presentation?></span></p>
                        <p><span class="text-20-bold"><?=$Project->ST_SourceCode?>: </span><span class="text-20"><?=$Project->SourceCode?></span></p>
                        <p>
                            <span class="text-20-bold"><?=$Project->ST_UsedTech?>: </span>
                            <?php if($Project->technologies){ $num = sizeof($Project->technologies); foreach($Project->technologies as $Technology){ ?>
                                <span class="text-20"><?=$Technology->Title?><?=($num<=1?'':',')?></span>
                            <?php $num--; }} ?>
                        </p>
                        <p><span class="text-20-bold"><?=$Project->ST_Description?>: </span><span class="text-20"><?=$Project->Description?></span></p>
                    </div>
                </div>
            <?php }} ?>
        </div>
    </div>

    <div class="bg-2 section" id="curriculum">
        <div class="curriculum-info row">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Curriculum->Title?></span></div>
            <div class="row col-12">
                <div class="col row div-blue-ball">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-20-bold"><?=$Curriculum->ST_Name?>: </span><span class="text-20"><?=$Curriculum->Name?></span></div>
                </div>
                <div class="col row div-blue-ball">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-20-bold"><?=$Curriculum->ST_PretendedJob?>: </span><span class="text-20"><?=$Curriculum->PretendedJob?></span></div>
                </div>
            </div>
            <div class="col-12"><span class="text-25-bold"><?=$Curriculum->ST_ProfExperience?></span></div>
            <div class="row col-12">
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
            <div class="col-12"><span class="text-25-bold"><?=$Curriculum->ST_Education?></span></div>
            <div class="row col-12">
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
            <div class="col-12"><span class="text-25-bold"><?=$Curriculum->ST_Languages?></span></div>
            <div class="row col-12">
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
                <div class="row col-12">
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

    <div class="bg-3" id="contact">
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
