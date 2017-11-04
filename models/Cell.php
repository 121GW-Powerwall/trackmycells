<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cell".
 *
 * @property integer $id
 * @property integer $donorPack_id
 * @property integer $cellModel_id
 * @property string $user_id
 * @property integer $cellStatus_id
 * @property string $label
 * @property integer $lastTestCapacity_id
 * @property integer $lastTestImp_id
 * @property integer $lastTestVoltage_id
 * @property string $Notes
 *
 * @property CellModel $cellModel
 * @property CellStatus $cellStatus
 * @property DonorPack $donorPack
 * @property TestCapacity $lastTestCapacity
 * @property TestImp $lastTestImp
 * @property TestVoltage $lastTestVoltage
 * @property BackendUser $user
 * @property TestCapacity[] $testCapacities
 * @property TestImp[] $testImps
 * @property TestVoltage[] $testVoltages
 */

class Cell extends \yii\db\ActiveRecord

{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cell';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['donorPack_id', 'cellModel_id', 'user_id', 'cellStatus_id'], 'required'],
            [['donorPack_id', 'cellModel_id', 'user_id', 'cellStatus_id', 'lastTestCapacity_id', 'lastTestImp_id', 'lastTestVoltage_id'], 'integer'],
            [['label'], 'string', 'max' => 100],
            [['Notes'], 'string', 'max' => 255],
            [['cellModel_id'], 'exist', 'skipOnError' => true, 'targetClass' => CellModel::className(), 'targetAttribute' => ['cellModel_id' => 'id']],
            [['cellStatus_id'], 'exist', 'skipOnError' => true, 'targetClass' => CellStatus::className(), 'targetAttribute' => ['cellStatus_id' => 'id']],
            [['donorPack_id'], 'exist', 'skipOnError' => true, 'targetClass' => DonorPack::className(), 'targetAttribute' => ['donorPack_id' => 'id']],
            [['lastTestCapacity_id'], 'exist', 'skipOnError' => true, 'targetClass' => TestCapacity::className(), 'targetAttribute' => ['lastTestCapacity_id' => 'id']],
            [['lastTestImp_id'], 'exist', 'skipOnError' => true, 'targetClass' => TestImp::className(), 'targetAttribute' => ['lastTestImp_id' => 'id']],
            [['lastTestVoltage_id'], 'exist', 'skipOnError' => true, 'targetClass' => TestVoltage::className(), 'targetAttribute' => ['lastTestVoltage_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => BackendUser::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'donorPack_id' => Yii::t('app', 'Donor Pack ID'),
            'cellModel_id' => Yii::t('app', 'Cell Model ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'cellStatus_id' => Yii::t('app', 'Cell Status ID'),
            'label' => Yii::t('app', 'Label'),
            'lastTestCapacity_id' => Yii::t('app', 'Last Test Capacity ID'),
            'lastTestImp_id' => Yii::t('app', 'Last Test Imp ID'),
            'lastTestVoltage_id' => Yii::t('app', 'Last Test Voltage ID'),
            'Notes' => Yii::t('app', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellModel()
    {
        return $this->hasOne(CellModel::className(), ['id' => 'cellModel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellStatus()
    {
        return $this->hasOne(CellStatus::className(), ['id' => 'cellStatus_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPack()
    {
        return $this->hasOne(DonorPack::className(), ['id' => 'donorPack_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastTestCapacity()
    {
        return $this->hasOne(TestCapacity::className(), ['id' => 'lastTestCapacity_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastTestImp()
    {
        return $this->hasOne(TestImp::className(), ['id' => 'lastTestImp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLastTestVoltage()
    {
        return $this->hasOne(TestVoltage::className(), ['id' => 'lastTestVoltage_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(BackendUser::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestCapacities()
    {
        return $this->hasMany(TestCapacity::className(), ['cell_id' => 'id'])->
            orderBy(['testDate' => SORT_DESC]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestImps()
    {
        return $this->hasMany(TestImp::className(), ['cell_id' => 'id'])->
            orderBy(['testDate' => SORT_DESC]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTestVoltages()
    {
        return $this->hasMany(TestVoltage::className(), ['cell_id' => 'id'])->
            orderBy(['testDate' => SORT_DESC]);
    }
}
