<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testcapacity".
 *
 * @property integer $id
 * @property integer $cellId
 * @property integer $capacity
 * @property string $testDate
 *
 * @property Cell $cell
 */
class Testcapacity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testcapacity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cellId', 'capacity', 'testDate'], 'required'],
            [['cellId', 'capacity'], 'integer'],
            [['testDate'], 'safe'],
            [['cellId'], 'exist', 'skipOnError' => true, 'targetClass' => Cell::className(), 'targetAttribute' => ['cellId' => 'Cell_ID']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cellId' => 'Cell ID',
            'capacity' => 'Capacity',
            'testDate' => 'Test Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCell()
    {
        return $this->hasOne(Cell::className(), ['Cell_ID' => 'cellId']);
    }
}
