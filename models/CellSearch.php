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
            [['id', 'donorPack_id', 'cellModel_id', 'user_id', 'cellStatus_id', 'lastTestCapacity_id', 'lastTestImp_id', 'lastTestVoltage_id'], 'integer'],
            [['label', 'Notes'], 'safe'],
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
        $query = Cell::find()->
                where (['user_id' => Yii::$app->user->identity->id]);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any 
            // records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'donorPack_id' => $this->donorPack_id,
            'cellModel_id' => $this->cellModel_id,
            'user_id' => $this->user_id,
            'cellStatus_id' => $this->cellStatus_id,
            'lastTestCapacity_id' => $this->lastTestCapacity_id,
            'lastTestImp_id' => $this->lastTestImp_id,
            'lastTestVoltage_id' => $this->lastTestVoltage_id,
        ]);

        $query->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'Notes', $this->Notes]);

        return $dataProvider;
    }
}
