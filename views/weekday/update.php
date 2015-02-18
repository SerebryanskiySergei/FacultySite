<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Weekday */

$this->title = 'Update Weekday: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Weekdays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="weekday-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
