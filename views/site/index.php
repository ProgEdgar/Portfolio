<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */

$this->title = 'Basic Programming';
?>
<div class="portfolio-index">
    <div id="<?=str_replace(' ','_',$Portfolio->HeaderName)?>">
        <div class="relative">
            <!-- Have to fix problem, when picture gets an error, section about gets in a problematic position -->
            <img id="dash-image" src="<?=Yii::$app->request->baseUrl.$Portfolio->DashImage?>" alt="Basic Programming Image"/>
            <div class="dashboard-info absolute">
                <div class="div-name"><span class="text-30-white-bold"><?=$Portfolio->DashTitle?></span></div>
                <div class="div-job"><span class="text-25-white-bold"><?=$Portfolio->DashJob?></span></div>
                <div class="div-contact-button">
                    <a class="buttons contact-button" href="#contact"><?=$Portfolio->DashContact?></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-1 section" id="about">
        <div class="row justify-center">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Portfolio->STAbout?></span></div>
            <div class="col-auto">
                <img id="about-image" src="<?=Yii::$app->request->baseUrl.$Portfolio->AboutImage?>"/>
            </div>
            <div class="div-about-description col"><span class="text-25"><?=$Portfolio->AboutDescription?></span></div>
        </div>
    </div>

    <div class="bg-2 section" id="technologies">
        <div class="row justify-center">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Portfolio->STTechnologies?></span></div>
            <div class="row col-12 justify-center">
                <?php if($Technologies){ $num=1; foreach($Technologies as $Technology){ ?>
                <div class="col row div-blue-ball text-center">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-25-bold"><?=$Technology->Name?></span></div>
                </div>
                <?php if($num==4){ $num=0; ?>
                    <div class="w-100"></div>
                <?php } $num++; }} ?>
            </div>
        </div>
    </div>

    <div class="bg-1 section" id="projects">
        <div class="row">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Portfolio->STProjects?></span></div>
        </div>
        <div class="projects row justify-center">
            <div class="text-center" id="all-button-slide">
                <?php if($Projects){ $num=1; foreach($Projects as $Project){ ?>
                    <span class="button-slide m-1" id="button-slide-<?=$num?>" onclick="currentDiv(<?=$num?>);"></span>
                <?php $num++; }} ?>
            </div>
            <?php if($Projects){ foreach($Projects as $Project){ ?>
                <div class="slides">
                    <div class="project-square w-75 m-auto">
                        <img class="w-100" src="<?=Yii::$app->request->baseUrl.$Project->Image?>"/>
                        <p class="text-center"><span class="text-25-bold"><?=$Project->Title?></span></p>
                        <p>
                            <span class="text-20-bold"><?=$Portfolio->ProjectSTPresentation?>: </span>
                            <span class="text-20">
                                <a href="<?=Yii::$app->request->baseUrl?>/pdf/<?=$Project->Presentation?>" target="_blank"><?=$Project->Presentation?></a>
                            </span>
                        </p>
                        <p>
                            <span class="text-20-bold"><?=$Portfolio->ProjectSTSourceCode?>: </span>
                            <span class="text-20">
                                <a href="<?=$Project->SourceCode?>"><?=$Project->SourceCode?></a>
                            </span>
                        </p>
                        <p>
                            <span class="text-20-bold"><?=$Portfolio->ProjectSTUsedTech?>: </span>
                            <?php if($Project->technologies){ $num = sizeof($Project->technologies); foreach($Project->technologies as $Technology){ ?>
                                <span class="text-20"><?=$Technology->Name?><?=($num<=1?'':',')?></span>
                            <?php $num--; }} ?>
                        </p>
                        <p><span class="text-20-bold"><?=$Portfolio->ProjectSTDescription?>: </span><span class="text-20"><?=$Project->Description?></span></p>
                    </div>
                </div>
            <?php }} ?>
            <div class="text-center" id="all-button2-slide">
                <?php if($Projects){ $num=1; foreach($Projects as $Project){ ?>
                    <span class="button2-slide m-1" id="button2-slide-<?=$num?>" onclick="currentDiv(<?=$num?>);"></span>
                <?php $num++; }} ?>
            </div>
        </div>
    </div>

    <div class="bg-2 section" id="curriculum">
        <div class="curriculum-info row justify-center">
            <div class="div-title col-12"><span class="text-30-bold"><?=$Portfolio->STCurriculum?></span></div>
            <div class="row col-12">
                <div class="col row div-blue-ball">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-20-bold"><?=$Portfolio->CurriculumSTName?>: </span><span class="text-20"><?=$Portfolio->CurriculumName?></span></div>
                </div>
                <div class="col row div-blue-ball">
                    <div class="blue-ball col-auto"></div>
                    <div class="col"><span class="text-20-bold"><?=$Portfolio->CurriculumSTPretendedJob?>: </span><span class="text-20"><?=$Portfolio->CurriculumPretendedJob?></span></div>
                </div>
            </div>
            <div class="col-12"><span class="text-25-bold"><?=$Portfolio->CurriculumSTProfExperience?></span></div>
            <?php if($CurriculumJobs){ $num=1; foreach($CurriculumJobs as $Job){ ?>
                <div class="col row">
                    <div class="col row div-blue-ball">
                        <div class="blue-ball col-auto"></div>
                        <div class="col">
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTJob?>: </span><span class="text-20"><?=$Job->Job?></span></p>
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTSince?>: </span><span class="text-20"><?=$Job->Since?></span></p>
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTLocal?>: </span><span class="text-20"><?=$Job->Local?></span></p>
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTCompany?>: </span><span class="text-20"><?=$Job->Company?></span></p>
                            <p><span class="text-20"><?=$Portfolio->CurriculumSTType?>: </span></p>
                            <p><span class="text-20"><?=$Job->Work?></span></p>
                        </div>
                    </div>
                </div>
            <?php if($num==2){ $num=0; ?>
                <div class="w-100"></div>
            <?php } $num++; }} ?>
            <div class="col-12"><span class="text-25-bold"><?=$Portfolio->CurriculumSTEducation?></span></div>
            <?php if($CurriculumEducations){ foreach($CurriculumEducations as $Education){ ?>
                <div class="col row">
                    <div class="col row div-blue-ball">
                        <div class="blue-ball col-auto"></div>
                        <div class="col">
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTCourse?>: </span><span class="text-20"><?=$Education->Course?></span></p>
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTUniversity?>: </span><span class="text-20"><?=$Education->University?></span></p>
                            <div class="inside-div-blue-ball">
                                <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTAcquiredTech?></span></p>
                                <div class="row">
                                    <!-- There's room for improvement by using 'for' with 'Tech->Type', starting from here -->
                                    <div class="col row">
                                        <div class="col-3">
                                            <p class="text-left"><span class="text-20-bold"><?=$Portfolio->CurriculumSTProgramming?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '1'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Name?> </span></p>
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
                                            <p class="text-left"><span class="text-20-bold"><?=$Portfolio->CurriculumSTOperatingSystem?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '2'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Name?> </span></p>
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
                                            <p class="text-left"><span class="text-20-bold"><?=$Portfolio->CurriculumSTFrameworks?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '3'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Name?> </span></p>
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
                                            <p class="text-left"><span class="text-20-bold"><?=$Portfolio->CurriculumSTTools?> </span></p>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                                <?php if($Education->educationTechnologies){ $num=1; foreach($Education->educationTechnologies as $Tech){ if($Tech->Type == '4'){?>
                                                    <div class="col">
                                                        <p><span class="text-20"><?=$Tech->technology->Name?> </span></p>
                                                    </div>
                                                    <?php if($num==3){ $num=0; ?>
                                                    <div class="w-100"></div>
                                                <?php } $num++; }}} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- To here -->
                                </div>
                            </div>
                            <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTFinalGrade?>: </span><span class="text-20"><?=$Education->FinalGrade?></span></p>
                        </div>
                    </div>
                </div>
                <div class="w-100"></div>
            <?php }} ?>
            <div class="col-12"><span class="text-25-bold"><?=$Portfolio->CurriculumSTLanguages?></span></div>
            <?php if($CurriculumLanguages){ foreach($CurriculumLanguages as $Language){ ?>
                <div class="col row">
                    <div class="col row div-blue-ball">
                        <div class="blue-ball col-auto"></div>
                            <div class="col-11">
                                <p><span class="text-20-bold"><?=$Portfolio->CurriculumSTLanguage?>: </span><span class="text-20"><?=$Language->Name?></span></p>
                                <div class="row inside-div-blue-ball">
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Portfolio->CurriculumSTOralComp?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Portfolio->CurriculumSTReading?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Portfolio->CurriculumSTOralInteraction?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Portfolio->CurriculumSTOralProduction?>: </span></p></div>
                                    <div class="col blue-ball-text"><p><span class="text-20-bold"><?=$Portfolio->CurriculumSTWriting?>: </span></p></div>
                                    <div class="w-100"></div>
                                    <div class="col"><p><span class="text-20"><?=$Language->OralComp?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Language->Reading?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Language->OralInteraction?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Language->OralProduction?></span></p></div>
                                    <div class="col"><p><span class="text-20"><?=$Language->Writing?></span></p></div>
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
            <div class="div-title col"><p><span class="text-25-bold"><?=$Portfolio->STContact?></span></p></div>
            <div class="w-100"></div>
            <div class="col row justify-center">
                <div class="col-6">
                    <p><span class="text-30-bold"><?=$Portfolio->ContactName?></span></p>
                    <p><span class="text-20-bold"><?=$Portfolio->ContactSTEmail?>: </span><span class="text-20"><?=$Portfolio->ContactEmail?></span></p>
                    <p><span class="text-20-bold"><?=$Portfolio->ContactSTPhoneNumber?>: </span><span class="text-20"><?=$Portfolio->ContactPhoneNumber?></span></p>
                </div>
                <div class="col-3" id="follow-me">
                    <div class="div-title"><p><span class="text-25-bold"><?=$Portfolio->STFollowMe?></span></p></div>
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
