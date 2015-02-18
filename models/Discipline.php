<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Discipline".
 *
 * @property integer $id
 * @property string $title
 *
 * @property Professor[] $professors
 * @property Shedule[] $shedules
 */
class Discipline extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Discipline';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProfessors()
    {
        return $this->hasMany(Professor::className(), ['disciplineId' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShedules()
    {
        return $this->hasMany(Shedule::className(), ['discipline_id' => 'id']);
    }
}
