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
        <title><?= Html::encode($this->title) ?></title>
        <link rel="stylesheet" type="text/css" href="<?=Yii::$app->request->baseUrl.'/css/dark-mode.css'?>" />
        <?php $this->head() ?>
    </head>
    <body class="d-flex flex-column h-100">
        <?php $this->beginBody() ?>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technologies</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BasicProgramming</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Curriculum</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <img width="40px" height="40px" src="<?=Yii::$app->request->baseUrl.'/img/settings-icon.png'?>" alt="Settings"/>
                        </a> 
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

        <footer id="footer" class="mt-auto py-3 bg-light">
            <div class="container">
                <p>Project Developed by Basic Programming</p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
