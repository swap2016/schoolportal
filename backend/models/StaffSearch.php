<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Staff;

/**
 * StaffSearch represents the model behind the search form about `backend\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'staff_school_id', 'staff_branch_id', 'staff_mobile_no', 'staff_marital_status', 'staff_medical_fitness', 'staff_character_cerificate', 'staff_height', 'staff_present_pincode', 'staff_permanent_pincode'], 'integer'],
            [['staff_first_name', 'staff_middle_name', 'staff_last_name', 'staff_dob', 'staff_gender', 'staff_email', 'staff_identity_mark', 'staff_parent_name', 'staff_cast', 'staff_category', 'staff_religion', 'staff_blood_group', 'staff_state_name', 'staff_city_name', 'staff_nearest_railway_station', 'staff_present_address', 'staff_present_state', 'staff_preset_city', 'staff_permanent_address', 'staff_permanent_state', 'staff_permanent_city', 'staff_created', 'staff_modified'], 'safe'],
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
        $query = Staff::find();

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
            'staff_school_id' => $this->staff_school_id,
            'staff_branch_id' => $this->staff_branch_id,
            'staff_dob' => $this->staff_dob,
            'staff_mobile_no' => $this->staff_mobile_no,
            'staff_marital_status' => $this->staff_marital_status,
            'staff_medical_fitness' => $this->staff_medical_fitness,
            'staff_character_cerificate' => $this->staff_character_cerificate,
            'staff_height' => $this->staff_height,
            'staff_present_pincode' => $this->staff_present_pincode,
            'staff_permanent_pincode' => $this->staff_permanent_pincode,
            'staff_created' => $this->staff_created,
            'staff_modified' => $this->staff_modified,
        ]);

        $query->andFilterWhere(['like', 'staff_first_name', $this->staff_first_name])
            ->andFilterWhere(['like', 'staff_middle_name', $this->staff_middle_name])
            ->andFilterWhere(['like', 'staff_last_name', $this->staff_last_name])
            ->andFilterWhere(['like', 'staff_gender', $this->staff_gender])
            ->andFilterWhere(['like', 'staff_email', $this->staff_email])
            ->andFilterWhere(['like', 'staff_identity_mark', $this->staff_identity_mark])
            ->andFilterWhere(['like', 'staff_parent_name', $this->staff_parent_name])
            ->andFilterWhere(['like', 'staff_cast', $this->staff_cast])
            ->andFilterWhere(['like', 'staff_category', $this->staff_category])
            ->andFilterWhere(['like', 'staff_religion', $this->staff_religion])
            ->andFilterWhere(['like', 'staff_blood_group', $this->staff_blood_group])
            ->andFilterWhere(['like', 'staff_state_name', $this->staff_state_name])
            ->andFilterWhere(['like', 'staff_city_name', $this->staff_city_name])
            ->andFilterWhere(['like', 'staff_nearest_railway_station', $this->staff_nearest_railway_station])
            ->andFilterWhere(['like', 'staff_present_address', $this->staff_present_address])
            ->andFilterWhere(['like', 'staff_present_state', $this->staff_present_state])
            ->andFilterWhere(['like', 'staff_preset_city', $this->staff_preset_city])
            ->andFilterWhere(['like', 'staff_permanent_address', $this->staff_permanent_address])
            ->andFilterWhere(['like', 'staff_permanent_state', $this->staff_permanent_state])
            ->andFilterWhere(['like', 'staff_permanent_city', $this->staff_permanent_city]);

        return $dataProvider;
    }
}
