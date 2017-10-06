<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donorPackModel".
 *
 * @property integer $id
 * @property integer $cellType_id
 * @property integer $cellSize_id
 * @property integer $manufacture_id
 * @property string $name
 * @property integer $numberOfCells
 *
 * @property DonorPack[] $donorPacks
 * @property CellSize $cellSize
 * @property CellType $cellType
 * @property Manufacture $manufacture
 */
class DonorPackModel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donorPackModel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cellType_id', 'cellSize_id', 'manufacture_id', 'name', 'numberOfCells'], 'required'],
            [['cellType_id', 'cellSize_id', 'manufacture_id', 'numberOfCells'], 'integer'],
            [['name'], 'string', 'max' => 100],
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
            'cellType_id' => Yii::t('app', 'Cell Type ID'),
            'cellSize_id' => Yii::t('app', 'Cell Size ID'),
            'manufacture_id' => Yii::t('app', 'Manufacture ID'),
            'name' => Yii::t('app', 'Name'),
            'numberOfCells' => Yii::t('app', 'Number Of Cells'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPacks()
    {
        return $this->hasMany(DonorPack::className(), ['donorPackModel_id' => 'id']);
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

    /**
     * @inheritdoc
     * @return DonorPackModelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DonorPackModelQuery(get_called_class());
    }
}
