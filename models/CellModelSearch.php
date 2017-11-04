<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cellmodel;

/**
 * CellmodelSearch represents the model behind the search form about `app\models\Cellmodel`.
 */
class CellmodelSearch extends Cellmodel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Cell_Model_ID', 'Manufacture_ID', 'Cell_Type_ID', 'Cell_Size_ID', 'Man_Cap', 'Man_Charge_mA', 'Man_Dis_mA'], 'integer'],
            [['Name', 'Wrap_Color', 'Ring_Color', 'Man_Spec_Sheet'], 'safe'],
            [['Man_Max_V', 'Man_Nom_V', 'Man_Min_V', 'Man_Max_mA', 'Man_Std_mA', 'Man_Charge_V', 'Man_Dis_V', 'Man_Max_Internal_Imp'], 'number'],
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
            'Cell_Model_ID' => $this->Cell_Model_ID,
            'Manufacture_ID' => $this->Manufacture_ID,
            'Cell_Type_ID' => $this->Cell_Type_ID,
            'Cell_Size_ID' => $this->Cell_Size_ID,
            'Man_Cap' => $this->Man_Cap,
            'Man_Max_V' => $this->Man_Max_V,
            'Man_Nom_V' => $this->Man_Nom_V,
            'Man_Min_V' => $this->Man_Min_V,
            'Man_Max_mA' => $this->Man_Max_mA,
            'Man_Std_mA' => $this->Man_Std_mA,
            'Man_Charge_V' => $this->Man_Charge_V,
            'Man_Charge_mA' => $this->Man_Charge_mA,
            'Man_Dis_V' => $this->Man_Dis_V,
            'Man_Dis_mA' => $this->Man_Dis_mA,
            'Man_Max_Internal_Imp' => $this->Man_Max_Internal_Imp,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Wrap_Color', $this->Wrap_Color])
            ->andFilterWhere(['like', 'Ring_Color', $this->Ring_Color])
            ->andFilterWhere(['like', 'Man_Spec_Sheet', $this->Man_Spec_Sheet]);

        return $dataProvider;
    }
}
