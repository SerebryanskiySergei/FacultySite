<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Professor".
 *
 * @property integer $id
 * @property string $fio
 * @property integer $disciplineId
 *
 * @property Discipline $discipline
 * @property Shedule[] $shedules
 * @property Student[] $students
 */
class Professor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Professor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['disciplineId'], 'integer'],
            [['fio'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fio' => 'Fio',
            'disciplineId' => 'Discipline ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiscipline()
    {
        return $this->hasOne(Discipline::className(), ['id' => 'disciplineId']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShedules()
    {
        return $this->hasMany(Shedule::className(), ['teacher_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudents()
    {
        return $this->hasMany(Student::className(), ['grandmaster_id' => 'id']);
    }
}
