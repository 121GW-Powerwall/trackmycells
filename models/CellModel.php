<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cellModel".
 *
 * @property integer $id
 * @property integer $manufacture_id
 * @property integer $cellType_id
 * @property integer $cellSize_id
 * @property string $name
 * @property integer $capacity
 * @property double $nominalV
 * @property double $chargingV
 * @property integer $chargingC
 * @property double $dischargeV
 * @property integer $dischargeC
 * @property string $wrapColor
 * @property string $ringColor
 * @property double $maxInternalImp
 * @property string $manSpecSheet
 *
 * @property Cell[] $cells
 * @property CellSize $cellSize
 * @property CellType $cellType
 * @property Manufacture $manufacture
 */
class Cellmodel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    //public static function find()
    //{
    //    return parent::find()->where(['=', 'user_id', '2']);
    //}
    public static function tableName()
    {
        return 'cellModel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacture_id', 'cellType_id', 'cellSize_id', 'name'], 'required'],
            [['manufacture_id', 'cellType_id', 'cellSize_id', 'capacity', 'chargingC', 'dischargeC'], 'integer'],
            [['nominalV', 'chargingV', 'dischargeV', 'maxInternalImp'], 'number'],
            [['name', 'wrapColor', 'ringColor'], 'string', 'max' => 100],
            [['manSpecSheet'], 'string', 'max' => 255],
            [['cellSize_id'], 'exist', 'skipOnError' => true, 'targetClass' => CellSize::className(), 'targetAttribute' => ['cellSize_id' => 'id']],
            [['cellType_id'], 'exist', 'skipOnError' => true, 'targetClass' => CellType::className(), 'targetAttribute' => ['cellType_id' => 'id']],
            [['manufacture_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manufacture::className(), 'targetAttribute' => ['manufacture_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'manufacture_id' => Yii::t('app', 'Manufacture ID'),
            'cellType_id' => Yii::t('app', 'Cell Type ID'),
            'cellSize_id' => Yii::t('app', 'Cell Size ID'),
            'name' => Yii::t('app', 'Name'),
            'capacity' => Yii::t('app', 'Capacity'),
            'nominalV' => Yii::t('app', 'Nominal V'),
            'chargingV' => Yii::t('app', 'Charging V'),
            'chargingC' => Yii::t('app', 'Charging C'),
            'dischargeV' => Yii::t('app', 'Discharge V'),
            'dischargeC' => Yii::t('app', 'Discharge C'),
            'wrapColor' => Yii::t('app', 'Wrap Color'),
            'ringColor' => Yii::t('app', 'Ring Color'),
            'maxInternalImp' => Yii::t('app', 'Max Internal Imp'),
            'manSpecSheet' => Yii::t('app', 'Man Spec Sheet'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCells()
    {
        return $this->hasMany(Cell::className(), ['cellModel_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellSize()
    {
        return $this->hasOne(CellSize::className(), ['id' => 'cellSize_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellType()
    {
        return $this->hasOne(CellType::className(), ['id' => 'cellType_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getManufacture()
    {
        return $this->hasOne(Manufacture::className(), ['id' => 'manufacture_id']);
    }
}
