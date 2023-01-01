<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Header $model */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Headers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="header-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdHeader' => $model->IdHeader], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdHeader' => $model->IdHeader], [
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
            'IdHeader',
            'Name',
            'Home',
            'About',
            'Technologies',
            'Projects',
            'Curriculum',
            'Contact',
            'Language_Id',
        ],
    ]) ?>

</div>
