<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Classroom".
 *
 * @property integer $id
 * @property string $title
 * @property string $position
 *
 * @property Shedule[] $shedules
 */
class Classroom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Classroom';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position'], 'string'],
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
            'position' => 'Position',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShedules()
    {
        return $this->hasMany(Shedule::className(), ['classroom_id' => 'id']);
    }
}
