<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\CurriculumEducation $model */

$this->title = $model->IdCurriculumEducation;
$this->params['breadcrumbs'][] = ['label' => 'Curriculum Educations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="curriculum-education-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdCurriculumEducation' => $model->IdCurriculumEducation], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdCurriculumEducation' => $model->IdCurriculumEducation], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdCurriculumEducation',
            'ST_Course',
            'Course',
            'ST_University',
            'University',
            'ST_AquiredTech',
            'ST_Programming',
            'ST_OperationSystem',
            'ST_Frameworks',
            'ST_Tools',
            'ST_FinalGrade',
            'FinalGrade',
            'Curriculum_Id',
        ],
    ]) ?>

</div>
