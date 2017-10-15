<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testCapacity".
 *
 * @property integer $id
 * @property integer $cell_id
 * @property integer $capacity
 * @property string $testDate
 * @property Cell[] $cells
 * @property Cell $cell
 */
class TestCapacity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testCapacity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cell_id', 'capacity', 'testDate'], 'required'],
            [['cell_id', 'capacity'], 'integer'],
            [['testDate'], 'safe'],
            [['cell_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cell::className(), 'targetAttribute' => ['cell_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cell_id' => Yii::t('app', 'Cell'),
            'capacity' => Yii::t('app', 'Capacity'),
            'testDate' => Yii::t('app', 'Test Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCells()
    {
        return $this->hasMany(Cell::className(), ['lastTestCapacity_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCell()
    {
        return $this->hasOne(Cell::className(), ['id' => 'cell_id']);
    }

    /**
     * @inheritdoc
     * @return TestCapacityQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestCapacityQuery(get_called_class());
    }
}
