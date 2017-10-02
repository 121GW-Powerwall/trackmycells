<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TestCapacity]].
 *
 * @see TestCapacity
 */
class TestCapacityQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TestCapacity[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TestCapacity|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
