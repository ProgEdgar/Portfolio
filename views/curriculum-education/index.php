<?php

use app\models\CurriculumEducation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Curriculum Educations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curriculum-education-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Curriculum Education', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdCurriculumEducation',
            'ST_Course',
            'Course',
            'ST_University',
            'University',
            //'ST_AquiredTech',
            //'ST_Programming',
            //'ST_OperationSystem',
            //'ST_Frameworks',
            //'ST_Tools',
            //'ST_FinalGrade',
            //'FinalGrade',
            //'Curriculum_Id',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CurriculumEducation $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'IdCurriculumEducation' => $model->IdCurriculumEducation]);
                 }
            ],
        ],
    ]); ?>


</div>
