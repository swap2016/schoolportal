<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "school_branch".
 *
 * @property integer $id
 * @property integer $school_id
 * @property string $school_branch_name
 * @property string $school_branch_email
 * @property integer $school_branch_phoneno
 * @property integer $school_branch_mobileno
 * @property string $school_branch_run_by
 * @property integer $school_branch_country
 * @property integer $school_branch_state
 * @property integer $school_branch_city
 * @property integer $school_branch_pincode
 * @property string $school_branch_category
 * @property string $school_branch_type
 * @property string $school_branch_establishment_year
 * @property string $school_branch_recognition_e_year
 * @property string $school_branch_recognition_s_year
 * @property string $school_branch_recognition_hs_year
 * @property integer $school_branch_shiftwise
 * @property integer $school_branch_residentail
 * @property string $school_branch_medium
 * @property integer $school_branch_medium_text
 * @property string $school_branch_affiliation_board
 * @property integer $school_branch_vocational_course
 * @property string $school_branch_latitude_longitude
 * @property string $school_branch_smc
 * @property integer $school_branch_committee_count
 * @property string $school_branch_session_start
 * @property string $school_branch_session_end
 * @property integer $school_branch_total_classroom
 * @property integer $school_branch_toilet_number
 * @property string $school_branch_drinking_facility
 * @property string $schoo_electicity_available
 * @property string $school_branch_type_boundraywall
 * @property string $school_branch_library
 * @property string $school_branch_playground
 * @property integer $school_branch_playground_available
 * @property string $school_branch_lab
 * @property integer $school_branch_smart_class
 * @property string $school_branch_principle_name
 * @property string $school_branch_address
 * @property string $school_branch_wise_principle
 * @property string $school_branch_website
 * @property string $school_branch_document
 * @property string $created
 * @property string $modified
 */
class SchoolBranch extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_branch';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'school_id', 'school_branch_name', 'school_branch_email', 'school_branch_phoneno', 'school_branch_mobileno', 'school_branch_run_by', 'school_branch_country', 'school_branch_state', 'school_branch_city', 'school_branch_pincode', 'school_branch_category', 'school_branch_type', 'school_branch_establishment_year', 'school_branch_recognition_e_year', 'school_branch_recognition_s_year', 'school_branch_recognition_hs_year', 'school_branch_shiftwise', 'school_branch_residentail', 'school_branch_medium', 'school_branch_medium_text', 'school_branch_affiliation_board', 'school_branch_vocational_course', 'school_branch_latitude_longitude', 'school_branch_smc', 'school_branch_committee_count', 'school_branch_session_start', 'school_branch_session_end', 'school_branch_total_classroom', 'school_branch_toilet_number', 'school_branch_drinking_facility', 'schoo_electicity_available', 'school_branch_type_boundraywall', 'school_branch_library', 'school_branch_playground', 'school_branch_playground_available', 'school_branch_lab', 'school_branch_smart_class', 'school_branch_principle_name', 'school_branch_address', 'school_branch_wise_principle', 'school_branch_website', 'school_branch_document', 'created', 'modified'], 'required'],
            [['id', 'school_id', 'school_branch_phoneno', 'school_branch_mobileno', 'school_branch_country', 'school_branch_state', 'school_branch_city', 'school_branch_pincode', 'school_branch_shiftwise', 'school_branch_residentail', 'school_branch_medium_text', 'school_branch_vocational_course', 'school_branch_committee_count', 'school_branch_total_classroom', 'school_branch_toilet_number', 'school_branch_playground_available', 'school_branch_smart_class'], 'integer'],
            [['school_branch_run_by', 'school_branch_category', 'school_branch_type', 'school_branch_medium', 'school_branch_affiliation_board', 'school_branch_smc', 'school_branch_drinking_facility', 'schoo_electicity_available', 'school_branch_type_boundraywall', 'school_branch_library', 'school_branch_playground', 'school_branch_lab', 'school_branch_address', 'school_branch_website'], 'string'],
            [['school_branch_establishment_year', 'school_branch_recognition_e_year', 'school_branch_recognition_s_year', 'school_branch_recognition_hs_year', 'school_branch_session_start', 'school_branch_session_end', 'created', 'modified'], 'safe'],
            [['school_branch_name', 'school_branch_email', 'school_branch_latitude_longitude', 'school_branch_principle_name', 'school_branch_wise_principle', 'school_branch_document'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'school_id' => 'School ID',
            'school_branch_name' => 'School Branch Name',
            'school_branch_email' => 'School Branch Email',
            'school_branch_phoneno' => 'School Branch Phoneno',
            'school_branch_mobileno' => 'School Branch Mobileno',
            'school_branch_run_by' => 'School Branch Run By',
            'school_branch_country' => 'School Branch Country',
            'school_branch_state' => 'School Branch State',
            'school_branch_city' => 'School Branch City',
            'school_branch_pincode' => 'School Branch Pincode',
            'school_branch_category' => 'School Branch Category',
            'school_branch_type' => 'School Branch Type',
            'school_branch_establishment_year' => 'School Branch Establishment Year',
            'school_branch_recognition_e_year' => 'School Branch Recognition E Year',
            'school_branch_recognition_s_year' => 'School Branch Recognition S Year',
            'school_branch_recognition_hs_year' => 'School Branch Recognition Hs Year',
            'school_branch_shiftwise' => 'School Branch Shiftwise',
            'school_branch_residentail' => 'School Branch Residentail',
            'school_branch_medium' => 'School Branch Medium',
            'school_branch_medium_text' => 'School Branch Medium Text',
            'school_branch_affiliation_board' => 'School Branch Affiliation Board',
            'school_branch_vocational_course' => 'School Branch Vocational Course',
            'school_branch_latitude_longitude' => 'School Branch Latitude Longitude',
            'school_branch_smc' => 'School Branch Smc',
            'school_branch_committee_count' => 'School Branch Committee Count',
            'school_branch_session_start' => 'School Branch Session Start',
            'school_branch_session_end' => 'School Branch Session End',
            'school_branch_total_classroom' => 'School Branch Total Classroom',
            'school_branch_toilet_number' => 'School Branch Toilet Number',
            'school_branch_drinking_facility' => 'School Branch Drinking Facility',
            'schoo_electicity_available' => 'Schoo Electicity Available',
            'school_branch_type_boundraywall' => 'School Branch Type Boundraywall',
            'school_branch_library' => 'School Branch Library',
            'school_branch_playground' => 'School Branch Playground',
            'school_branch_playground_available' => 'School Branch Playground Available',
            'school_branch_lab' => 'School Branch Lab',
            'school_branch_smart_class' => 'School Branch Smart Class',
            'school_branch_principle_name' => 'School Branch Principle Name',
            'school_branch_address' => 'School Branch Address',
            'school_branch_wise_principle' => 'School Branch Wise Principle',
            'school_branch_website' => 'School Branch Website',
            'school_branch_document' => 'School Branch Document',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }
}
