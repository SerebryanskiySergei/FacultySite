<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Shedule;

/**
 * SheduleSearch represents the model behind the search form about `app\models\Shedule`.
 */
class SheduleSearch extends Shedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'weekday_number', 'lesson_number_id', 'classroom_id', 'discipline_id', 'group_id', 'teacher_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Shedule::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'weekday_number' => $this->weekday_number,
            'lesson_number_id' => $this->lesson_number_id,
            'classroom_id' => $this->classroom_id,
            'discipline_id' => $this->discipline_id,
            'group_id' => $this->group_id,
            'teacher_id' => $this->teacher_id,
        ]);

        return $dataProvider;
    }
}
