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
                    <a class="buttons contact-button" href="#contact"><?=$Dashboard->Contact?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-1 section" id="about">
        <div class="row justify-center">
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
                <?php if($AllTechnologies){ $num=1; foreach($AllTechnologies as $Technology){ ?>
                <div class="col row div-blue-ball text-center">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-25-bold"><?=$Technology->Title?></span></div>
                </div>
                <?php if($num==4){ $num=0; ?>
                    <div class="w-100"></div>
                <?php } $num++; }} ?>
            </div>
        </div>
    </div>

    <div class="bg-1 section" id="projects">
        <div class="row">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Projects->Title?></span></div>
        </div>
        <div class="projects row justify-center">
            <div class="text-center" id="all-button-slide">
                <?php if($AllProjects){ $num=1; foreach($AllProjects as $Project){ ?>
                    <span class="button-slide m-1" id="button-slide-<?=$num?>" onclick="currentDiv(<?=$num?>);"></span>
                <?php $num++; }} ?>
            </div>
            <?php if($AllProjects){ foreach($AllProjects as $Project){ ?>
                <div class="slides">
                    <div class="project-square w-75 m-auto">
                        <img class="w-100" src="<?=Yii::$app->request->baseUrl.$Project->Image?>"/>
                        <p class="text-center"><span class="text-25-bold"><?=$Project->Title?></span></p>
                        <p>
                            <span class="text-20-bold"><?=$Project->ST_Presentation?>: </span>
                            <span class="text-20">
                                <a href="<?=Yii::$app->request->baseUrl?>/pdf/<?=$Project->Presentation?>" target="_blank"><?=$Project->Presentation?></a>
                            </span>
                        </p>
                        <p>
                            <span class="text-20-bold"><?=$Project->ST_SourceCode?>: </span>
                            <span class="text-20">
                                <a href="<?=$Project->SourceCode?>"><?=$Project->SourceCode?></a>
                            </span>
                        </p>
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
            <div class="text-center" id="all-button2-slide">
                <?php if($AllProjects){ $num=1; foreach($AllProjects as $Project){ ?>
                    <span class="button2-slide m-1" id="button2-slide-<?=$num?>" onclick="currentDiv(<?=$num?>);"></span>
                <?php $num++; }} ?>
            </div>
        </div>
    </div>

    <div class="bg-2 section" id="curriculum">
        <div class="curriculum-info row justify-center">
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
            <?php if($AllJobs){ $num=1; foreach($AllJobs as $Job){ ?>
                <div class="col row">
                    <div class="col row div-blue-ball">
                        <div class="blue-ball col-auto"></div>
                        <div class="col">
                            <p><span class="text-20-bold"><?=$Job->ST_Job?>: </span><span class="text-20"><?=$Job->Job?></span></p>
                            <p><span class="text-20-bold"><?=$Job->ST_Since?>: </span><span class="text-20"><?=$Job->Since?></span></p>
                            <p><span class="text-20-bold"><?=$Job->ST_Local?>: </span><span class="text-20"><?=$Job->Local?></span></p>
                            <p><span class="text-20-bold"><?=$Job->ST_Company?>: </span><span class="text-20"><?=$Job->Company?></span></p>
                            <p><span class="text-20"><?=$Job->ST_Type?>: </span></p>
                            <p><span class="text-20"><?=$Job->Work?></span></p>
                        </div>
                    </div>
                </div>
            <?php if($num==2){ $num=0; ?>
                <div class="w-100"></div>
            <?php } $num++; }} ?>
            <div class="col-12"><span class="text-25-bold"><?=$Curriculum->ST_Education?></span></div>
            <?php if($AllEducation){ foreach($AllEducation as $Education){ ?>
                <div class="col row">
                    <div class="col row div-blue-ball">
                        <div class="blue-ball col-auto"></div>
                        <div class="col">
                            <p><span class="text-20-bold"><?=$Education->ST_Course?>: </span><span class="text-20"><?=$Education->Course?></span></p>
                            <p><span class="text-20-bold"><?=$Education->ST_University?>: </span><span class="text-20"><?=$Education->University?></span></p>
                            <div class="inside-div-blue-ball">
                                <p><span class="text-20-bold"><?=$Education->ST_AcquiredTech?></span></p>
                                <div class="row">
                                    <div class="col row">
                                        <div class="col-3">
                                            <p class="text-left"><span class="text-20-bold"><?=$Education->ST_Programming?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '1'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Title?> </span></p>
                                                    </div>
                                                    <?php if($num==3){ $num=0; ?>
                                                    <div class="w-100"></div>
                                                <?php } $num++; }}} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col row">
                                        <div class="col-3">
                                            <p class="text-left"><span class="text-20-bold"><?=$Education->ST_OperatingSystem?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '2'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Title?> </span></p>
                                                    </div>
                                                    <?php if($num==3){ $num=0; ?>
                                                    <div class="w-100"></div>
                                                <?php } $num++; }}} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col row">
                                        <div class="col-3">
                                            <p class="text-left"><span class="text-20-bold"><?=$Education->ST_Frameworks?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '3'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Title?> </span></p>
                                                    </div>
                                                    <?php if($num==3){ $num=0; ?>
                                                    <div class="w-100"></div>
                                                <?php } $num++; }}} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col row">
                                        <div class="col-3">
                                            <p class="text-left"><span class="text-20-bold"><?=$Education->ST_Tools?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '4'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Title?> </span></p>
                                                    </div>
                                                    <?php if($num==3){ $num=0; ?>
                                                    <div class="w-100"></div>
                                                <?php } $num++; }}} ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><span class="text-20-bold"><?=$Education->ST_FinalGrade?>: </span><span class="text-20"><?=$Education->FinalGrade?></span></p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
            <?php }} ?>
            <div class="col-12"><span class="text-25-bold"><?=$Curriculum->ST_Languages?></span></div>
            <div class="col row">
                <div class="col row div-blue-ball">
                    <div class="blue-ball col-auto"></div>
                    <div class="col-11">
                        <p><span class="text-20-bold"><?=$CurriculumLanguage->ST_MLanguage?>: </span><span class="text-20"><?=$CurriculumLanguage->MLanguage?></span></p>
                        <div class="row inside-div-blue-ball">
                            <div class="col"><p><span class="text-20-bold"><?=$CurriculumLanguage->ST_OralComp?>: </span></p></div>
                            <div class="col"><p><span class="text-20-bold"><?=$CurriculumLanguage->ST_Reading?>: </span></p></div>
                            <div class="col"><p><span class="text-20-bold"><?=$CurriculumLanguage->ST_OralInteraction?>: </span></p></div>
                            <div class="col"><p><span class="text-20-bold"><?=$CurriculumLanguage->ST_OralProduction?>: </span></p></div>
                            <div class="col"><p><span class="text-20-bold"><?=$CurriculumLanguage->ST_Writing?>: </span></p></div>
                            <div class="w-100"></div>
                            <div class="col"><p><span class="text-20"><?=$CurriculumLanguage->OralComp?></span></p></div>
                            <div class="col"><p><span class="text-20"><?=$CurriculumLanguage->Reading?></span></p></div>
                            <div class="col"><p><span class="text-20"><?=$CurriculumLanguage->OralInteraction?></span></p></div>
                            <div class="col"><p><span class="text-20"><?=$CurriculumLanguage->OralProduction?></span></p></div>
                            <div class="col"><p><span class="text-20"><?=$CurriculumLanguage->Writing?></span></p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-100"></div>
            <?php if($ForeignLanguages){ foreach($ForeignLanguages as $Foreign){ ?>
                <div class="col row">
                    <div class="col row div-blue-ball">
                        <div class="blue-ball col-auto"></div>
                            <div class="col-11">
                                <p><span class="text-20-bold"><?=$Foreign->ST_FLanguage?>: </span><span class="text-20"><?=$Foreign->FLanguage?></span></p>
                                <div class="row inside-div-blue-ball">
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Foreign->ST_OralComp?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Foreign->ST_Reading?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Foreign->ST_OralInteraction?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Foreign->ST_OralProduction?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Foreign->ST_Writing?>: </span></p></div>
                                    <div class="w-100"></div>
                                    <div class="col"><p><span class="text-20"><?=$Foreign->OralComp?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Foreign->Reading?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Foreign->OralInteraction?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Foreign->OralProduction?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Foreign->Writing?></span></p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
            <?php }} ?>
        </div>
    </div>

    <div class="bg-3 section" id="contact">
        <div class="contact-info row justify-center">
            <div class="div-title col"><p><span class="text-25-bold"><?=$Contact->Title?></span></p></div>
            <div class="w-100"></div>
            <div class="col row justify-center">
                <div class="col-6">
                    <p><span class="text-30-bold"><?=$Contact->Name?></span></p>
                    <p><span class="text-20-bold"><?=$Contact->ST_Email?>: </span><span class="text-20"><?=$Contact->Email?></span></p>
                    <p><span class="text-20-bold"><?=$Contact->ST_PhoneNumber?>: </span><span class="text-20"><?=$Contact->PhoneNumber?></span></p>
                </div>
                <div class="col-3" id="follow-me">
                    <div class="div-title"><p><span class="text-25-bold"><?=$FollowMe->Title?></span></p></div>
                    <div class="row justify-center">
                        <?php if($FollowImages){ $num=1; foreach($FollowImages as $Image){ ?>
                            <div class="col-auto">
                                <a href="<?=$Image->Link?>">
                                    <img class="img-follow-me" src="<?=Yii::$app->request->baseUrl.$Image->Image?>"/>
                                </a>
                            </div>
                            <?php if($num==3){ $num=0; ?>
                            <div class="w-100"></div>
                        <?php } $num++; }} ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
