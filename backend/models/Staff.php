<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property integer $id
 * @property integer $staff_school_id
 * @property integer $staff_branch_id
 * @property string $staff_first_name
 * @property string $staff_middle_name
 * @property string $staff_last_name
 * @property string $staff_dob
 * @property string $staff_gender
 * @property integer $staff_mobile_no
 * @property string $staff_email
 * @property integer $staff_marital_status
 * @property string $staff_identity_mark
 * @property string $staff_parent_name
 * @property integer $staff_medical_fitness
 * @property integer $staff_character_cerificate
 * @property integer $staff_height
 * @property string $staff_cast
 * @property string $staff_category
 * @property string $staff_religion
 * @property string $staff_blood_group
 * @property string $staff_state_name
 * @property string $staff_city_name
 * @property string $staff_nearest_railway_station
 * @property string $staff_present_address
 * @property string $staff_present_state
 * @property string $staff_preset_city
 * @property integer $staff_present_pincode
 * @property string $staff_permanent_address
 * @property string $staff_permanent_state
 * @property string $staff_permanent_city
 * @property integer $staff_permanent_pincode
 * @property string $staff_created
 * @property string $staff_modified
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                [['staff_school_id', 'staff_branch_id', 'staff_first_name','staff_last_name', 'staff_dob', 'staff_gender', 'staff_mobile_no', 'staff_email', 'staff_marital_status', 'staff_identity_mark', 'staff_parent_name', 'staff_medical_fitness', 'staff_character_cerificate', 'staff_height', 'staff_cast', 'staff_category', 'staff_religion', 'staff_blood_group', 'staff_state_name', 'staff_city_name', 'staff_present_address', 'staff_present_state', 'staff_preset_city', 'staff_present_pincode', 'staff_permanent_address', 'staff_permanent_state', 'staff_permanent_city', 'staff_permanent_pincode'], 'required'],

           // [['staff_school_id', 'staff_branch_id', 'staff_first_name','staff_last_name'], 'required'],

            [['staff_school_id', 'staff_branch_id', 'staff_mobile_no', 'staff_medical_fitness', 'staff_character_cerificate', 'staff_height', 'staff_present_pincode', 'staff_permanent_pincode'], 'integer'],
            [['staff_dob', 'staff_created', 'staff_modified'], 'safe'],

            [['staff_gender', 'staff_present_address', 'staff_permanent_address','staff_marital_status'], 'string'],

            [['staff_first_name', 'staff_middle_name', 'staff_last_name', 'staff_email', 'staff_identity_mark', 'staff_parent_name', 'staff_cast', 'staff_category', 'staff_religion', 'staff_blood_group', 'staff_state_name', 'staff_city_name', 'staff_nearest_railway_station', 'staff_present_state', 'staff_preset_city', 'staff_permanent_state', 'staff_permanent_city'], 'string', 'max' => 255],
            [['staff_branch_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Staff ID',
            'staff_school_id' => 'School ID',
            'staff_branch_id' => 'Branch ID',
            'staff_first_name' => 'First Name',
            'staff_middle_name' => 'Middle Name',
            'staff_last_name' => 'Last Name',
            'staff_dob' => 'Date Of Birth',
            'staff_gender' => 'Gender',
            'staff_mobile_no' => 'Mobile Number',
            'staff_email' => 'Email',
            'staff_marital_status' => 'Marital Status',
            'staff_identity_mark' => 'Identity Mark',
            'staff_parent_name' => 'Parent Name',
            'staff_medical_fitness' => 'Medical Fitness',
            'staff_character_cerificate' => 'Character Cerificate',
            'staff_height' => 'Height',
            'staff_cast' => 'Cast',
            'staff_category' => 'Category',
            'staff_religion' => 'Religion',
            'staff_blood_group' => 'Blood Group',
            'staff_state_name' => 'State Name',
            'staff_city_name' => 'City Name',
            'staff_nearest_railway_station' => 'Nearest Railway Station',
            'staff_present_address' => ' Present Address',
            'staff_present_state' => ' Present State',
            'staff_preset_city' => ' Preset City',
            'staff_present_pincode' => ' Present Pincode',
            'staff_permanent_address' => ' Permanent Address',
            'staff_permanent_state' => ' Permanent State',
            'staff_permanent_city' => ' Permanent City',
            'staff_permanent_pincode' => ' Permanent Pincode',
            'staff_created' => ' Created',
            'staff_modified' => ' Modified',
        ];
    }
}
