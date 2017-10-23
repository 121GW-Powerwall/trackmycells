<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DonorPack]].
 *
 * @see DonorPack
 */
class DonorPackQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return DonorPack[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DonorPack|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
