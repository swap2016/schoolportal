<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "state".
 *
 * @property integer $state_id
 * @property integer $pairent_id
 * @property string $state_name
 */
class State extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'state';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pairent_id', 'state_name'], 'required'],
            [['pairent_id'], 'integer'],
            [['state_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'state_id' => 'State ID',
            'pairent_id' => 'Pairent ID',
            'state_name' => 'State Name',
        ];
    }
}
