<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CallShedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="call-shedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'begin_time')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'end_time')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
