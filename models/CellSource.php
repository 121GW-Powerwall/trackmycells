<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cellSource".
 *
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $website
 *
 * @property DonorPack[] $donorPacks
 */
class CellSource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cellSource';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'address', 'city', 'state', 'website'], 'required'],
            [['name', 'address', 'city', 'state'], 'string', 'max' => 100],
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
            'address' => Yii::t('app', 'Address'),
            'city' => Yii::t('app', 'City'),
            'state' => Yii::t('app', 'State'),
            'website' => Yii::t('app', 'Website'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPacks()
    {
        return $this->hasMany(DonorPack::className(), ['cellSource_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CellSourceQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CellSourceQuery(get_called_class());
    }
}
