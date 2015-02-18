<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Weekday".
 *
 * @property integer $number
 * @property string $title
 *
 * @property Shedule[] $shedules
 */
class Weekday extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Weekday';
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
            'number' => 'Number',
            'title' => 'Title',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShedules()
    {
        return $this->hasMany(Shedule::className(), ['weekday_number' => 'number']);
    }
}
