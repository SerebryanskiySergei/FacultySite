<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SheduleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Shedules';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shedule-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Shedule', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'weekday_number',
            'lesson_number_id',
            'classroom_id',
            'discipline_id',
            // 'group_id',
            // 'teacher_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
