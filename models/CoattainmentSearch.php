<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Coattainment;

/**
 * CoattainmentSearch represents the model behind the search form of `app\models\Coattainment`.
 */
class CoattainmentSearch extends Coattainment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CO_NO'], 'safe'],
            [['AssignmentPresentation', 'Tutorial', 'CIA_Test'], 'number'],
            [['SEE'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Coattainment::find();

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
            'AssignmentPresentation' => $this->AssignmentPresentation,
            'Tutorial' => $this->Tutorial,
            'CIA_Test' => $this->CIA_Test,
            'SEE' => $this->SEE,
        ]);

        $query->andFilterWhere(['like', 'CO_NO', $this->CO_NO]);

        return $dataProvider;
    }
}
