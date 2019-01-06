<?php

namespace kouosl\dersprogrami\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
//use kouosl\dersprogrami\models\Tablo;

/**
 * TabloSearch represents the model behind the search form of `backend\models\Tablo`.
 */
class TabloSearch extends Tablo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['col1'], 'integer'],
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
        $query = Tablo::find();

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
            'col1' => $this->col1,
        ]);

        return $dataProvider;
    }
}
