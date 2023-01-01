<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\About $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Abouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="about-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdAbout' => $model->IdAbout], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdAbout' => $model->IdAbout], [
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
            'IdAbout',
            'Title',
            'Description:ntext',
            'Image',
            'Language_Id',
        ],
    ]) ?>

</div>
