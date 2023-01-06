<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
    <head>
        <title><?=$this->params['Name']?></title>
        <link rel="stylesheet" type="text/css" href="<?=Yii::$app->request->baseUrl.'/css/dark-mode.css'?>" />
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
        <?php $this->beginBody() ?>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container cont-nav">
                <ul class="navbar-nav row">
                    <li class="nav-item col-auto">
                        <span class="nav-link buttons">
                            <img width="40px" height="40px" src="<?=Yii::$app->request->baseUrl.'/img/light-mode.png'?>" alt="Light Mode"/>
                        </span> 
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link nav-option text-25" href="#<?=str_replace(' ','_',$this->params['Name'])?>"><?=$this->params['Home']?></a>    
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link nav-option text-25" href="#about"><?=$this->params['About']?></a> 
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link nav-option text-25" href="#technologies"><?=$this->params['Technologies']?></a> 
                    </li>
                    <li class="nav-item col-3">
                        <a class="nav-link active nav-option text-30-bold" href="#<?=str_replace(' ','_',$this->params['Name'])?>"><?=$this->params['Name']?></a> 
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link nav-option text-25" href="#projects"><?=$this->params['Projects']?></a> 
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link nav-option text-25" href="#curriculum"><?=$this->params['Curriculum']?></a> 
                    </li>
                    <li class="nav-item col">
                        <a class="nav-link nav-option text-25" href="#contact"><?=$this->params['Contact']?></a> 
                    </li>
                    <li class="nav-item col-auto">
                        <span class="nav-link buttons">
                            <img width="40px" height="40px" src="<?=Yii::$app->request->baseUrl.'/img/settings-icon.png'?>" alt="Settings"/>
                        </span> 
                    </li>
                </ul>
            </div>
        </nav>
        <main id="main" class="flex-shrink-0" role="main">
            <div class="container">
                <?php if (!empty($this->params['breadcrumbs'])): ?>
                    <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
                <?php endif ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </main>

        <footer id="footer" class="py-2">
            <div class="container">
                <div id="developed"><p class="text-right"><span class="text-15-bold">Project Developed by: Basic Programming</span></p></div>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
