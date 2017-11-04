<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cellType".
 *
 * @property integer $id
 * @property string $name
 *
 * @property CellModel[] $cellModels
 * @property DonorPackModel[] $donorPackModels
 */
class Celltype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cellType';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCellModels()
    {
        return $this->hasMany(CellModel::className(), ['cellType_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPackModels()
    {
        return $this->hasMany(DonorPackModel::className(), ['cellType_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CelltypeQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CelltypeQuery(get_called_class());
    }
}
