<?php

use app\models\Header;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Headers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="header-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Header', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdHeader',
            'Name',
            'Home',
            'About',
            'Technologies',
            //'Projects',
            //'Curriculum',
            //'Contact',
            //'Language_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Header $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdHeader' => $model->IdHeader]);
                 }
            ],
        ],
    ]); ?>


</div>
