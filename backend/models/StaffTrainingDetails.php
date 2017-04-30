<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff_training_details".
 *
 * @property integer $id
 * @property integer $staff_id
 * @property string $staff_training_type
 * @property string $staff_training_topic_name
 * @property string $staff_institute_name
 * @property string $staff_sponsored_by
 * @property string $staff_date_from
 * @property string $staff_date_to
 * @property integer $staff_training_location
 * @property string $staff_training_created
 * @property string $staff_training_modified
 */
class StaffTrainingDetails extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff_training_details';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['staff_id', 'staff_training_type', 'staff_training_topic_name', 'staff_institute_name', 'staff_sponsored_by', 'staff_date_from', 'staff_date_to', 'staff_training_location'], 'required'],
            [['staff_id'], 'integer'],
            [['staff_date_from', 'staff_date_to', 'staff_training_created', 'staff_training_modified'], 'safe'],
            [['staff_training_type', 'staff_training_topic_name', 'staff_institute_name', 'staff_sponsored_by','staff_training_location'], 'string', 'max' => 255],
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
            'staff_training_type' => 'Training Type',
            'staff_training_topic_name' => 'Training Topic Name',
            'staff_institute_name' => 'Institute Name',
            'staff_sponsored_by' => 'Sponsored By',
            'staff_date_from' => 'Date From',
            'staff_date_to' => 'Date To',
            'staff_training_location' => 'Training Location',
            'staff_training_created' => 'Training Created',
            'staff_training_modified' => 'Training Modified',
        ];

    }
}
