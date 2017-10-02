<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Manufacture".
 *
 * @property integer $Manufacture_ID
 * @property string $name
 * @property string $website
 */
class Manufacture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Manufacture';
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
            'Manufacture_ID' => 'Manufacture  ID',
            'name' => 'Name',
            'website' => 'Website',
        ];
    }
}
