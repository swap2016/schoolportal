<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StaffEducationInformation;

/**
 * StaffEducationInformationSearch represents the model behind the search form about `\backend\models\StaffEducationInformation`.
 */
class StaffEducationInformationSearch extends StaffEducationInformation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'staff_id', 'staff_percentage', 'staff_passing_year'], 'integer'],
            [['staff_education_name', 'staff_board_university', 'staff_stream', 'staff_grade', 'staff_education_type', 'created', 'modified'], 'safe'],
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
        $query = StaffEducationInformation::find();

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
            'staff_id' => $this->staff_id,
            'staff_percentage' => $this->staff_percentage,
            'staff_passing_year' => $this->staff_passing_year,
            'created' => $this->created,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'staff_education_name', $this->staff_education_name])
            ->andFilterWhere(['like', 'staff_board_university', $this->staff_board_university])
            ->andFilterWhere(['like', 'staff_stream', $this->staff_stream])
            ->andFilterWhere(['like', 'staff_grade', $this->staff_grade])
            ->andFilterWhere(['like', 'staff_education_type', $this->staff_education_type]);

        return $dataProvider;
    }
}
