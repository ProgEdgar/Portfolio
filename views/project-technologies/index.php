<?php

use app\models\ProjectTechnologies;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Project Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-technologies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Project Technologies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Project_Id',
            'Technology_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ProjectTechnologies $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Project_Id' => $model->Project_Id, 'Technology_Id' => $model->Technology_Id]);
                 }
            ],
        ],
    ]); ?>


</div>
