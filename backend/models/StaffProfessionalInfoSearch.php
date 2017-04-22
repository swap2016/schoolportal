<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StaffProfessionalInfo;

/**
 * StaffProfessionalInfoSearch represents the model behind the search form about `backend\models\StaffProfessionalInfo`.
 */
class StaffProfessionalInfoSearch extends StaffProfessionalInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'staff_id', 'staff_salary', 'staff_gps_cps_number', 'staff_gis_member'], 'integer'],
            [['staff_appointment_date', 'staff_designation', 'staff_mode_recruitment', 'staff_class', 'staff_type', 'staff_retirement', 'staff_deduction_type', 'staff_esalary_code'], 'safe'],
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
        $query = StaffProfessionalInfo::find();

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
            'staff_id' => $this->staff_id,
            'staff_appointment_date' => $this->staff_appointment_date,
            'staff_salary' => $this->staff_salary,
            'staff_retirement' => $this->staff_retirement,
            'staff_gps_cps_number' => $this->staff_gps_cps_number,
            'staff_gis_member' => $this->staff_gis_member,
        ]);

        $query->andFilterWhere(['like', 'staff_designation', $this->staff_designation])
            ->andFilterWhere(['like', 'staff_mode_recruitment', $this->staff_mode_recruitment])
            ->andFilterWhere(['like', 'staff_class', $this->staff_class])
            ->andFilterWhere(['like', 'staff_type', $this->staff_type])
            ->andFilterWhere(['like', 'staff_deduction_type', $this->staff_deduction_type])
            ->andFilterWhere(['like', 'staff_esalary_code', $this->staff_esalary_code]);

        return $dataProvider;
    }
}
