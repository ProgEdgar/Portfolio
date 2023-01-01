<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Technologies $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Technologies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="technologies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdTechnologies' => $model->IdTechnologies], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdTechnologies' => $model->IdTechnologies], [
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
            'IdTechnologies',
            'Title',
            'Language_Id',
        ],
    ]) ?>

</div>
