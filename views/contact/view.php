<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Contact $model */

$this->title = $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Contacts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="contact-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IdContact' => $model->IdContact], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IdContact' => $model->IdContact], [
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
            'IdContact',
            'Title',
            'Name',
            'ST_Email:email',
            'Email:email',
            'ST_PhoneNumber',
            'PhoneNumber',
            'Language_Id',
        ],
    ]) ?>

</div>
