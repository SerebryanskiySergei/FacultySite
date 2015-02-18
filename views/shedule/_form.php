<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Shedule */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shedule-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'weekday_number')->textInput() ?>

    <?= $form->field($model, 'lesson_number_id')->textInput() ?>

    <?= $form->field($model, 'classroom_id')->textInput() ?>

    <?= $form->field($model, 'discipline_id')->textInput() ?>

    <?= $form->field($model, 'group_id')->textInput() ?>

    <?= $form->field($model, 'teacher_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
