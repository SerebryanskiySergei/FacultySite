<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Group".
 *
 * @property integer $id
 * @property string $title
 * @property integer $capacity
 * @property string $profession
 *
 * @property Shedule[] $shedules
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['capacity'], 'integer'],
            [['title', 'profession'], 'string', 'max' => 255]
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
            'capacity' => 'Capacity',
            'profession' => 'Profession',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShedules()
    {
        return $this->hasMany(Shedule::className(), ['group_id' => 'id']);
    }
}
