<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CallShedule */

$this->title = 'Update Call Shedule: ' . ' ' . $model->lesson_number;
$this->params['breadcrumbs'][] = ['label' => 'Call Shedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lesson_number, 'url' => ['view', 'id' => $model->lesson_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="call-shedule-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
