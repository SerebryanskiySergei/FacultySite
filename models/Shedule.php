<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Shedule".
 *
 * @property integer $weekday_number
 * @property integer $lesson_number_id
 * @property integer $classroom_id
 * @property integer $discipline_id
 * @property integer $group_id
 * @property integer $teacher_id
 *
 * @property Group $group
 * @property Professor $teacher
 * @property Weekday $weekdayNumber
 * @property CallShedule $lessonNumber
 * @property Сlassroom $classroom
 * @property Discipline $discipline
 */
class Shedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Shedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['weekday_number', 'lesson_number_id', 'classroom_id', 'discipline_id', 'group_id', 'teacher_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'weekday_number' => 'Weekday Number',
            'lesson_number_id' => 'Lesson Number ID',
            'classroom_id' => 'Classroom ID',
            'discipline_id' => 'Discipline ID',
            'group_id' => 'Group ID',
            'teacher_id' => 'Teacher ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeacher()
    {
        return $this->hasOne(Professor::className(), ['id' => 'teacher_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWeekdayNumber()
    {
        return $this->hasOne(Weekday::className(), ['number' => 'weekday_number']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLessonNumber()
    {
        return $this->hasOne(CallShedule::className(), ['lesson_number' => 'lesson_number_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClassroom()
    {
        return $this->hasOne(Сlassroom::className(), ['id' => 'classroom_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(Discipline::className(), ['id' => 'discipline_id']);
    }
}
