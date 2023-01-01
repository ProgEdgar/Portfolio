<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Curriculum $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Curriculums', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="curriculum-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdCurriculum' => $model->IdCurriculum], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdCurriculum' => $model->IdCurriculum], [
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
            'IdCurriculum',
            'Title',
            'ST_Name',
            'Name',
            'ST_PretendedJob',
            'PretendedJob',
            'ST_ProfExperience',
            'ST_Education',
            'ST_Languages',
            'Language_Id',
        ],
    ]) ?>

</div>
