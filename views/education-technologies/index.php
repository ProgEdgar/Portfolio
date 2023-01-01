<?php

use app\models\EducationTechnologies;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Education Technologies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="education-technologies-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Education Technologies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CurriculumEducation_Id',
            'Technology_Id',
            'Type',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, EducationTechnologies $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'CurriculumEducation_Id' => $model->CurriculumEducation_Id, 'Technology_Id' => $model->Technology_Id]);
                 }
            ],
        ],
    ]); ?>


</div>
