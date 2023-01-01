<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\FollowMe $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Follow Mes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="follow-me-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdFollowMe' => $model->IdFollowMe], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdFollowMe' => $model->IdFollowMe], [
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
            'IdFollowMe',
            'Title',
        ],
    ]) ?>

</div>
