<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CallShedule */

$this->title = $model->lesson_number;
$this->params['breadcrumbs'][] = ['label' => 'Call Shedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-shedule-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->lesson_number], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->lesson_number], [
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
            'lesson_number',
            'begin_time',
            'end_time',
        ],
    ]) ?>

</div>
