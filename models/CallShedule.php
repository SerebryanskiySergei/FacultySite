<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "call_shedule".
 *
 * @property integer $lesson_number
 * @property string $begin_time
 * @property string $end_time
 *
 * @property Shedule[] $shedules
 */
class CallShedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'call_shedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['begin_time', 'end_time'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'lesson_number' => 'Lesson Number',
            'begin_time' => 'Begin Time',
            'end_time' => 'End Time',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShedules()
    {
        return $this->hasMany(Shedule::className(), ['lesson_number_id' => 'lesson_number']);
    }
}
