<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Project $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Projects', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdProject' => $model->IdProject], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdProject' => $model->IdProject], [
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
            'IdProject',
            'Title',
            'ST_Presentation',
            'Pesentation',
            'ST_UsedTech',
            'ST_CodeSource',
            'CodeSource',
            'ST_Description',
            'Description:ntext',
            'Projects_Id',
        ],
    ]) ?>

</div>
