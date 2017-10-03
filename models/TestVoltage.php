<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testVoltage".
 *
 * @property integer $id
 * @property integer $cell_id
 * @property double $volt
 * @property string $testDate
 *
 * @property Cell[] $cells
 * @property Cell $cell
 */
class TestVoltage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testVoltage';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cell_id', 'volt', 'testDate'], 'required'],
            [['cell_id'], 'integer'],
            [['volt'], 'number'],
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
            'cell_id' => Yii::t('app', 'Cell ID'),
            'volt' => Yii::t('app', 'Volt'),
            'testDate' => Yii::t('app', 'Test Date'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCells()
    {
        return $this->hasMany(Cell::className(), ['lastTestVoltage_id' => 'id']);
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
     * @return TestVoltageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TestVoltageQuery(get_called_class());
    }
}
