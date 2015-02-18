<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CallShedule */

$this->title = 'Create Call Shedule';
$this->params['breadcrumbs'][] = ['label' => 'Call Shedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="call-shedule-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
