<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff_education_information".
 *
 * @property integer $id
 * @property integer $staff_id
 * @property integer $staff_education_name
 * @property integer $staff_board_university
 * @property integer $staff_percentage
 * @property integer $staff_passing_year
 * @property integer $staff_stream
 * @property integer $staff_grade
 * @property string $staff_education_type
 * @property string $created
 * @property string $modified
 */
class StaffEducationInformation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_education_information';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'staff_education_name', 'staff_board_university', 'staff_percentage', 'staff_passing_year', 'staff_stream', 'staff_grade', 'staff_education_type'], 'required'],
            [['staff_id', 'staff_percentage', 'staff_passing_year'], 'integer'],
            [['staff_education_type','staff_education_name', 'staff_board_university','staff_grade','staff_stream'], 'string'],
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
            'staff_education_name' => 'Education Name',
            'staff_board_university' => 'Board University',
            'staff_percentage' => 'Percentage',
            'staff_passing_year' => 'Passing Year',
            'staff_stream' => 'Stream',
            'staff_grade' => 'Grade',
            'staff_education_type' => 'Education Type',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    public function getYearsList() {

      $currentYear = date('Y')-20;
      $yearFrom = 2013;
      $yearsRange = range($yearFrom, $currentYear);
      return array_combine($yearsRange, $yearsRange);
      
}

}
