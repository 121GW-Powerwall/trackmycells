<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donorPack".
 *
 * @property integer $id
 * @property integer $cellsAssigned
 * @property integer $donorPackModel_id
 * @property string $user_id
 * @property integer $cellSource_id
 * @property string $dateAquired
 * @property double $cost
 * @property string $notes
 *
 * @property Cell[] $cells
 * @property BackendUser $user
 * @property CellSource $cellSource
 * @property DonorPackModel $donorPackModel
 */
class DonorPack extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donorPack';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cellsAssigned', 'donorPackModel_id', 'user_id', 'cellSource_id'], 'integer'],
            [['donorPackModel_id', 'user_id', 'cellSource_id', 'dateAquired', 'cost', 'notes'], 'required'],
            [['dateAquired'], 'safe'],
            [['cost'], 'number'],
            [['notes'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => BackendUser::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['cellSource_id'], 'exist', 'skipOnError' => true, 'targetClass' => CellSource::className(), 'targetAttribute' => ['cellSource_id' => 'id']],
            [['donorPackModel_id'], 'exist', 'skipOnError' => true, 'targetClass' => DonorPackModel::className(), 'targetAttribute' => ['donorPackModel_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'cellsAssigned' => Yii::t('app', 'Cells Assigned'),
            'donorPackModel_id' => Yii::t('app', 'Donor Pack Model ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'cellSource_id' => Yii::t('app', 'Cell Source ID'),
            'dateAquired' => Yii::t('app', 'Date Aquired'),
            'cost' => Yii::t('app', 'Cost'),
            'notes' => Yii::t('app', 'Notes'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCells()
    {
        return $this->hasMany(Cell::className(), ['donorPack_id' => 'id']);
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
    public function getCellSource()
    {
        return $this->hasOne(CellSource::className(), ['id' => 'cellSource_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDonorPackModel()
    {
        return $this->hasOne(DonorPackModel::className(), ['id' => 'donorPackModel_id']);
    }

    /**
     * @inheritdoc
     * @return DonorPackQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DonorPackQuery(get_called_class());
    }
}
