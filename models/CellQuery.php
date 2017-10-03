<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Cell]].
 *
 * @see Cell
 */
class CellQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Cell[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Cell|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
