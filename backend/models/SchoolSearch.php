<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\School;

/**
 * SchoolSearch represents the model behind the search form about `backend\models\School`.
 */
class SchoolSearch extends School
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'school_phoneno', 'school_mobileno', 'school_country', 'school_state', 'school_city', 'school_pincode', 'school_shiftwise', 'school_residentail', 'school_medium_text', 'school_vocational_course', 'school_committee_count', 'school_total_classroom', 'school_toilet_number', 'school_playground_available', 'school_smart_class'], 'integer'],
            [['school_name', 'school_email', 'school_run_by', 'school_category', 'school_type', 'school_establishment_year', 'school_recognition_e_year', 'school_recognition_s_year', 'school_recognition_hs_year', 'school_medium', 'school_affiliation_board', 'school_latitude_longitude', 'school_smc', 'school_session_start', 'school_session_end', 'school_drinking_facility', 'schoo_electicity_available', 'school_type_boundraywall', 'school_library', 'school_playground', 'school_lab', 'school_principle_name', 'school_address', 'school_wise_principle', 'school_website', 'school_document', 'created', 'modified'], 'safe'],
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
        $query = School::find();

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
            'school_phoneno' => $this->school_phoneno,
            'school_mobileno' => $this->school_mobileno,
            'school_country' => $this->school_country,
            'school_state' => $this->school_state,
            'school_city' => $this->school_city,
            'school_pincode' => $this->school_pincode,
            'school_establishment_year' => $this->school_establishment_year,
            'school_recognition_e_year' => $this->school_recognition_e_year,
            'school_recognition_s_year' => $this->school_recognition_s_year,
            'school_recognition_hs_year' => $this->school_recognition_hs_year,
            'school_shiftwise' => $this->school_shiftwise,
            'school_residentail' => $this->school_residentail,
            'school_medium_text' => $this->school_medium_text,
            'school_vocational_course' => $this->school_vocational_course,
            'school_committee_count' => $this->school_committee_count,
            'school_session_start' => $this->school_session_start,
            'school_session_end' => $this->school_session_end,
            'school_total_classroom' => $this->school_total_classroom,
            'school_toilet_number' => $this->school_toilet_number,
            'school_playground_available' => $this->school_playground_available,
            'school_smart_class' => $this->school_smart_class,
            'created' => $this->created,
            'modified' => $this->modified,
        ]);

        $query->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'school_email', $this->school_email])
            ->andFilterWhere(['like', 'school_run_by', $this->school_run_by])
            ->andFilterWhere(['like', 'school_category', $this->school_category])
            ->andFilterWhere(['like', 'school_type', $this->school_type])
            ->andFilterWhere(['like', 'school_medium', $this->school_medium])
            ->andFilterWhere(['like', 'school_affiliation_board', $this->school_affiliation_board])
            ->andFilterWhere(['like', 'school_latitude_longitude', $this->school_latitude_longitude])
            ->andFilterWhere(['like', 'school_smc', $this->school_smc])
            ->andFilterWhere(['like', 'school_drinking_facility', $this->school_drinking_facility])
            ->andFilterWhere(['like', 'schoo_electicity_available', $this->schoo_electicity_available])
            ->andFilterWhere(['like', 'school_type_boundraywall', $this->school_type_boundraywall])
            ->andFilterWhere(['like', 'school_library', $this->school_library])
            ->andFilterWhere(['like', 'school_playground', $this->school_playground])
            ->andFilterWhere(['like', 'school_lab', $this->school_lab])
            ->andFilterWhere(['like', 'school_principle_name', $this->school_principle_name])
            ->andFilterWhere(['like', 'school_address', $this->school_address])
            ->andFilterWhere(['like', 'school_wise_principle', $this->school_wise_principle])
            ->andFilterWhere(['like', 'school_website', $this->school_website])
            ->andFilterWhere(['like', 'school_document', $this->school_document]);

        return $dataProvider;
    }
}
