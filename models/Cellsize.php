<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cellSize".
 *
 * @property integer $id
 * @property string $name
 *
 * @property CellModel[] $cellModels
 * @property DonorPackModel[] $donorPackModels
 */
class CellSize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cellSize';
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
        return $this->hasMany(CellModel::className(), ['cellSize_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPackModels()
    {
        return $this->hasMany(DonorPackModel::className(), ['cellSize_id' => 'id']);
    }
}
