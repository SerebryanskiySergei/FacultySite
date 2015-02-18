<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $fathername
 * @property integer $group_id
 * @property integer $grandmaster_id
 *
 * @property Group $group
 * @property Professor $grandmaster
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'name', 'surname', 'fathername', 'group_id', 'grandmaster_id'], 'required'],
            [['id', 'group_id', 'grandmaster_id'], 'integer'],
            [['name', 'surname', 'fathername'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'fathername' => 'Fathername',
            'group_id' => 'Group ID',
            'grandmaster_id' => 'Grandmaster ID',
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
    public function getGrandmaster()
    {
        return $this->hasOne(Professor::className(), ['id' => 'grandmaster_id']);
    }
}
