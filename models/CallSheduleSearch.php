<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CallShedule;

/**
 * CallSheduleSearch represents the model behind the search form about `app\models\CallShedule`.
 */
class CallSheduleSearch extends CallShedule
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lesson_number'], 'integer'],
            [['begin_time', 'end_time'], 'safe'],
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
        $query = CallShedule::find();

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
            'lesson_number' => $this->lesson_number,
        ]);

        $query->andFilterWhere(['like', 'begin_time', $this->begin_time])
            ->andFilterWhere(['like', 'end_time', $this->end_time]);

        return $dataProvider;
    }
}
