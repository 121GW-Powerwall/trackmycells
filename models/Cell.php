<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cell".
 *
 * @property integer $Cell_ID
 * @property integer $Donor_Pack_ID
 * @property integer $Cell_Model_ID
 * @property integer $User_ID
 * @property integer $Cell_Status_ID
 * @property string $Cell_Label
 * @property integer $Last_Capacity_Test_ID
 * @property integer $Last_Imp_Test_ID
 * @property integer $Last_Voltage_Test_ID
 * @property string $Notes
 */
class Cell extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cell';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Donor_Pack_ID', 'Cell_Model_ID', 'User_ID', 'Cell_Status_ID'], 'required'],
            [['Donor_Pack_ID', 'Cell_Model_ID', 'User_ID', 'Cell_Status_ID', 'Last_Capacity_Test_ID', 'Last_Imp_Test_ID', 'Last_Voltage_Test_ID'], 'integer'],
            [['Cell_Label'], 'string', 'max' => 100],
            [['Notes'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cell_ID' => 'Cell ID',
            'Donor_Pack_ID' => 'Donor Pack ID',
            'Cell_Model_ID' => 'Cell Model ID',
            'User_ID' => 'User ID',
            'Cell_Status_ID' => 'Cell Status ID',
            'Cell_Label' => 'Cell Label',
            'Last_Capacity_Test_ID' => 'Last Capacity Test ID',
            'Last_Imp_Test_ID' => 'Last  Imp Test ID',
            'Last_Voltage_Test_ID' => 'Last Voltage Test ID',
            'Notes' => 'Notes',
        ];
    }
    public function getCells()
    {
        return $this->hasOne(Donor_Pack::className(), ['Donor_Pack_ID' => 'Donor_Pack_ID']);
        
    }
}
