<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Donorpackmodel;

/**
 * DonorpackmodelSearch represents the model behind the search form about `app\models\Donorpackmodel`.
 */
class DonorpackmodelSearch extends Donorpackmodel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cellType_id', 'cellSize_id', 'manufacture_id', 'numberOfCells'], 'integer'],
            [['name'], 'safe'],
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
        $query = Donorpackmodel::find();

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
            'cellType_id' => $this->cellType_id,
            'cellSize_id' => $this->cellSize_id,
            'manufacture_id' => $this->manufacture_id,
            'numberOfCells' => $this->numberOfCells,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
