<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "manufacture".
 *
 * @property integer $id
 * @property string $name
 * @property string $website
 *
 * @property CellModel[] $cellModels
 * @property DonorPackModel[] $donorPackModels
 */
class Manufacture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manufacture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
            [['website'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'website' => Yii::t('app', 'Website'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellModels()
    {
        return $this->hasMany(CellModel::className(), ['manufacture_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPackModels()
    {
        return $this->hasMany(DonorPackModel::className(), ['manufacture_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ManufactureQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ManufactureQuery(get_called_class());
    }
}
