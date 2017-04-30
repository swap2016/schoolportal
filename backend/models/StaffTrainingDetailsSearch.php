<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StaffTrainingDetails;

/**
 * StaffTrainingDetailsSearch represents the model behind the search form about `\backend\models\StaffTrainingDetails`.
 */
class StaffTrainingDetailsSearch extends StaffTrainingDetails
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'staff_id', 'staff_training_location'], 'integer'],
            [['staff_training_type', 'staff_training_topic_name', 'staff_institute_name', 'staff_sponsored_by', 'staff_date_from', 'staff_date_to', 'staff_training_created', 'staff_training_modified'], 'safe'],
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
        $query = StaffTrainingDetails::find();

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
            'staff_date_from' => $this->staff_date_from,
            'staff_date_to' => $this->staff_date_to,
            'staff_training_location' => $this->staff_training_location,
            'staff_training_created' => $this->staff_training_created,
            'staff_training_modified' => $this->staff_training_modified,
        ]);

        $query->andFilterWhere(['like', 'staff_training_type', $this->staff_training_type])
            ->andFilterWhere(['like', 'staff_training_topic_name', $this->staff_training_topic_name])
            ->andFilterWhere(['like', 'staff_institute_name', $this->staff_institute_name])
            ->andFilterWhere(['like', 'staff_sponsored_by', $this->staff_sponsored_by]);

        return $dataProvider;
    }
}
