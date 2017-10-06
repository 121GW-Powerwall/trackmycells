<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Testcapacity;

/**
 * TestcapacitySearch represents the model behind the search form about `app\models\Testcapacity`.
 */
class TestcapacitySearch extends Testcapacity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cell_id', 'capacity'], 'integer'],
            [['testDate'], 'safe'],
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
        $query = Testcapacity::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cell_id' => $this->cell_id,
            'capacity' => $this->capacity,
            'testDate' => $this->testDate,
        ]);

        return $dataProvider;
    }
}
