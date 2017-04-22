<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "school".
 *
 * @property integer $id
 * @property string $school_name
 * @property string $school_email
 * @property integer $school_phoneno
 * @property integer $school_mobileno
 * @property string $school_run_by
 * @property integer $school_country
 * @property integer $school_state
 * @property integer $school_city
 * @property integer $school_pincode
 * @property string $school_category
 * @property string $school_type
 * @property string $school_establishment_year
 * @property string $school_recognition_e_year
 * @property string $school_recognition_s_year
 * @property string $school_recognition_hs_year
 * @property integer $school_shiftwise
 * @property integer $school_residentail
 * @property string $school_medium
 * @property integer $school_medium_text
 * @property string $school_affiliation_board
 * @property integer $school_vocational_course
 * @property string $school_latitude_longitude
 * @property string $school_smc
 * @property integer $school_committee_count
 * @property string $school_session_start
 * @property string $school_session_end
 * @property integer $school_total_classroom
 * @property integer $school_toilet_number
 * @property string $school_drinking_facility
 * @property string $schoo_electicity_available
 * @property string $school_type_boundraywall
 * @property string $school_library
 * @property string $school_playground
 * @property integer $school_playground_available
 * @property string $school_lab
 * @property integer $school_smart_class
 * @property string $school_principle_name
 * @property string $school_address
 * @property string $school_wise_principle
 * @property string $school_website
 * @property string $school_document
 * @property string $created
 * @property string $modified
 */
class School extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_name', 'school_email', 'school_phoneno', 'school_mobileno', 'school_run_by', 'school_country', 'school_state', 'school_city', 'school_pincode', 'school_category', 'school_type', 'school_establishment_year', 'school_recognition_e_year', 'school_recognition_s_year', 'school_recognition_hs_year', 'school_shiftwise', 'school_residentail', 'school_medium', 'school_medium_text', 'school_affiliation_board', 'school_vocational_course', 'school_smc', 'school_committee_count', 'school_session_start', 'school_session_end', 'school_total_classroom', 'school_toilet_number', 'school_drinking_facility', 'schoo_electicity_available', 'school_type_boundraywall', 'school_library', 'school_playground', 'school_playground_available', 'school_lab', 'school_smart_class', 'school_principle_name', 'school_address', 'school_wise_principle', 'school_website', 'school_document', 'created', 'modified'], 'required'],
            [[ 'school_phoneno', 'school_mobileno', 'school_country', 'school_state', 'school_city', 'school_pincode', 'school_shiftwise', 'school_residentail', 'school_medium_text', 'school_vocational_course', 'school_committee_count', 'school_total_classroom', 'school_toilet_number', 'school_playground_available', 'school_smart_class'], 'integer'],
            [['school_run_by', 'school_category', 'school_type', 'school_medium', 'school_affiliation_board', 'school_smc', 'school_drinking_facility', 'schoo_electicity_available', 'school_type_boundraywall', 'school_library', 'school_playground', 'school_lab', 'school_address', 'school_website'], 'string'],
            [['school_establishment_year', 'school_recognition_e_year', 'school_recognition_s_year', 'school_recognition_hs_year', 'school_session_start', 'school_session_end', 'created', 'modified'], 'safe'],
            [['school_name', 'school_email',  'school_principle_name', 'school_wise_principle', 'school_document'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           // 'id' => 'ID',
            'school_name' => 'School Name',
            'school_email' => 'School Email',
            'school_phoneno' => 'School Phone No',
            'school_mobileno' => 'School Mobile No',
            'school_run_by' => 'School Run By',
            'school_country' => 'School Country',
            'school_state' => 'School State',
            'school_city' => 'School City',
            'school_pincode' => 'School Pincode',
            'school_category' => 'School Category',
            'school_type' => 'School Type',
            'school_establishment_year' => 'School Establishment Year',
            'school_recognition_e_year' => 'School Recognition E Year',
            'school_recognition_s_year' => 'School Recognition S Year',
            'school_recognition_hs_year' => 'School Recognition Hs Year',
            'school_shiftwise' => 'School Shiftwise',
            'school_residentail' => 'School Residentail',
            'school_medium' => 'School Medium',
            'school_medium_text' => 'School Medium Text',
            'school_affiliation_board' => 'School Affiliation Board',
            'school_vocational_course' => 'School Vocational Course',
            'school_latitude_longitude' => 'School Latitude Longitude',
            'school_smc' => 'School Smc',
            'school_committee_count' => 'School Committee Count',
            'school_session_start' => 'School Session Start',
            'school_session_end' => 'School Session End',
            'school_total_classroom' => 'School Total Classroom',
            'school_toilet_number' => 'School Toilet Number',
            'school_drinking_facility' => 'School Drinking Facility',
            'schoo_electicity_available' => 'Schoo Electicity Available',
            'school_type_boundraywall' => 'School Type Boundraywall',
            'school_library' => 'School Library',
            'school_playground' => 'School Playground',
            'school_playground_available' => 'School Playground Available',
            'school_lab' => 'School Lab',
            'school_smart_class' => 'School Smart Class',
            'school_principle_name' => 'School Principle Name',
            'school_address' => 'School Address',
            'school_wise_principle' => 'School Wise Principle',
            'school_website' => 'School Website',
            'school_document' => 'School Document',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }
}
