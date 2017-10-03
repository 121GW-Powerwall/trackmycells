<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cellStatus".
 *
 * @property integer $id
 * @property integer $active
 * @property string $name
 *
 * @property Cell[] $cells
 */
class CellStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cellStatus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['active', 'name'], 'required'],
            [['active'], 'integer'],
            [['name'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'active' => Yii::t('app', 'Active'),
            'name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCells()
    {
        return $this->hasMany(Cell::className(), ['cellStatus_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return CellStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CellStatusQuery(get_called_class());
    }
}
