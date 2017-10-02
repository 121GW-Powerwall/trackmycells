<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Cell_Size".
 *
 * @property integer $Cell_Size_ID
 * @property string $Name
 */
class Cellsize extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Cell_Size';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Cell_Size_ID' => 'Cell  Size  ID',
            'Name' => 'Name',
        ];
    }
}
