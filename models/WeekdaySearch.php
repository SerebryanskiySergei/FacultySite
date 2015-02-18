<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Weekday;

/**
 * WeekdaySearch represents the model behind the search form about `app\models\Weekday`.
 */
class WeekdaySearch extends Weekday
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['number', 'title'], 'integer'],
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
        $query = Weekday::find();

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
            'number' => $this->number,
            'title' => $this->title,
        ]);

        return $dataProvider;
    }
}
