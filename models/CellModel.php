<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cell_Model".
 *
 * @property integer $Cell_Model_ID
 * @property integer $Manufacture_ID
 * @property integer $Cell_Type_ID
 * @property integer $Cell_Size_ID
 * @property string $Name
 * @property integer $Man_Cap
 * @property double $Man_Max_V
 * @property double $Man_Nom_V
 * @property double $Man_Min_V
 * @property double $Man_Max_mA
 * @property double $Man_Std_mA
 * @property double $Man_Charge_V
 * @property integer $Man_Charge_mA
 * @property double $Man_Dis_V
 * @property integer $Man_Dis_mA
 * @property string $Wrap_Color
 * @property string $Ring_Color
 * @property double $Man_Max_Internal_Imp
 * @property string $Man_Spec_Sheet
 */
class Cellmodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cell_Model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Manufacture_ID', 'Cell_Type_ID', 'Cell_Size_ID', 'Name'], 'required'],
            [['Manufacture_ID', 'Cell_Type_ID', 'Cell_Size_ID', 'Man_Cap', 'Man_Charge_mA', 'Man_Dis_mA'], 'integer'],
            [['Man_Max_V', 'Man_Nom_V', 'Man_Min_V', 'Man_Max_mA', 'Man_Std_mA', 'Man_Charge_V', 'Man_Dis_V', 'Man_Max_Internal_Imp'], 'number'],
            [['Name', 'Wrap_Color', 'Ring_Color'], 'string', 'max' => 100],
            [['Man_Spec_Sheet'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cell_Model_ID' => 'Cell  Model  ID',
            'Manufacture_ID' => 'Manufacture  ID',
            'Cell_Type_ID' => 'Cell  Type  ID',
            'Cell_Size_ID' => 'Cell  Size  ID',
            'Name' => 'Name',
            'Man_Cap' => 'Man  Cap',
            'Man_Max_V' => 'Man  Max  V',
            'Man_Nom_V' => 'Man  Nom  V',
            'Man_Min_V' => 'Man  Min  V',
            'Man_Max_mA' => 'Man  Max M A',
            'Man_Std_mA' => 'Man  Std M A',
            'Man_Charge_V' => 'Man  Charge  V',
            'Man_Charge_mA' => 'Man  Charge M A',
            'Man_Dis_V' => 'Man  Dis  V',
            'Man_Dis_mA' => 'Man  Dis M A',
            'Wrap_Color' => 'Wrap  Color',
            'Ring_Color' => 'Ring  Color',
            'Man_Max_Internal_Imp' => 'Man  Max  Internal  Imp',
            'Man_Spec_Sheet' => 'Man  Spec  Sheet',
        ];
    }
}
