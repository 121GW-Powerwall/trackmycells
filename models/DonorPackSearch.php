<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DonorPack;

/**
 * DonorPackSearch represents the model behind the search form about `app\models\DonorPack`.
 */
class DonorPackSearch extends DonorPack
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cellsAssigned', 'donorPackModel_id', 'user_id', 'cellSource_id'], 'integer'],
            [['dateAquired', 'notes'], 'safe'],
            [['cost'], 'number'],
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
        $query = DonorPack::find();

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
            'cellsAssigned' => $this->cellsAssigned,
            'donorPackModel_id' => $this->donorPackModel_id,
            'user_id' => $this->user_id,
            'cellSource_id' => $this->cellSource_id,
            'dateAquired' => $this->dateAquired,
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere(['like', 'notes', $this->notes]);

        return $dataProvider;
    }
}
