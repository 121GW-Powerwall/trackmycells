<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[CellSource]].
 *
 * @see CellSource
 */
class CellSourceQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return CellSource[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return CellSource|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
