<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\ProjectTechnologies $model */

$this->title = $model->Project_Id;
$this->params['breadcrumbs'][] = ['label' => 'Project Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-technologies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Project_Id' => $model->Project_Id, 'Technology_Id' => $model->Technology_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Project_Id' => $model->Project_Id, 'Technology_Id' => $model->Technology_Id], [
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
            'Project_Id',
            'Technology_Id',
        ],
    ]) ?>

</div>
