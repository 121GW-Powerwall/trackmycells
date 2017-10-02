<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cell;

/**
 * CellSearch represents the model behind the search form about `app\models\Cell`.
 */
class CellSearch extends Cell
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cell_ID', 'Donor_Pack_ID', 'Cell_Model_ID', 'User_ID', 'Cell_Status_ID', 'Last_Capacity_Test_ID', 'Last_Imp_Test_ID', 'Last_Voltage_Test_ID'], 'integer'],
            [['Cell_Label', 'Notes'], 'safe'],
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
        $query = Cell::find();

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
            'Cell_ID' => $this->Cell_ID,
            'Donor_Pack_ID' => $this->Donor_Pack_ID,
            'Cell_Model_ID' => $this->Cell_Model_ID,
            'User_ID' => $this->User_ID,
            'Cell_Status_ID' => $this->Cell_Status_ID,
            'Last_Capacity_Test_ID' => $this->Last_Capacity_Test_ID,
            'Last_Imp_Test_ID' => $this->Last_Imp_Test_ID,
            'Last_Voltage_Test_ID' => $this->Last_Voltage_Test_ID,
        ]);

        $query->andFilterWhere(['like', 'Cell_Label', $this->Cell_Label])
            ->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
