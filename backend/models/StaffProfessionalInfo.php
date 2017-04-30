<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff_professional_info".
 *
 * @property integer $id
 * @property integer $staff_id
 * @property string $staff_appointment_date
 * @property string $staff_designation
 * @property string $staff_mode_recruitment
 * @property string $staff_class
 * @property string $staff_type
 * @property integer $staff_salary
 * @property string $staff_retirement
 * @property string $staff_deduction_type
 * @property integer $staff_gps_cps_number
 * @property integer $staff_gis_member
 * @property string $staff_esalary_code
 */
class StaffProfessionalInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_professional_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'staff_appointment_date', 'staff_designation', 'staff_mode_recruitment', 'staff_class', 'staff_type', 'staff_salary', 'staff_retirement', 'staff_deduction_type', 'staff_gps_cps_number', 'staff_gis_member', 'staff_esalary_code'], 'required'],
            [['staff_id', 'staff_salary', 'staff_gps_cps_number', 'staff_gis_member'], 'integer'],
            [['staff_appointment_date', 'staff_retirement'], 'safe'],
            [['staff_type', 'staff_deduction_type'], 'string'],
            [['staff_designation', 'staff_mode_recruitment', 'staff_class', 'staff_esalary_code'], 'string', 'max' => 255],
            [['staff_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'staff_id' => 'Staff ID',
            'staff_appointment_date' => 'Appointment Date',
            'staff_designation' => 'Designation',
            'staff_mode_recruitment' => 'Mode Of Recruitment',
            'staff_class' => 'Class',
            'staff_type' => 'Type',
            'staff_salary' => 'Salary',
            'staff_retirement' => 'Retirement',
            'staff_deduction_type' => 'Deduction Type',
            'staff_gps_cps_number' => 'Gps Cps Number',
            'staff_gis_member' => 'Gis Member',
            'staff_esalary_code' => 'Esalary Code',
        ];
    }
}
