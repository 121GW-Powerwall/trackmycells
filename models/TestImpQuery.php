<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[TestImp]].
 *
 * @see TestImp
 */
class TestImpQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return TestImp[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return TestImp|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
