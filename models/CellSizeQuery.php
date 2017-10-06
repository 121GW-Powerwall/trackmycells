<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CellSize]].
 *
 * @see CellSize
 */
class CellSizeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CellSize[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CellSize|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
