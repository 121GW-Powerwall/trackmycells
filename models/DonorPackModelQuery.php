<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[DonorPackModel]].
 *
 * @see DonorPackModel
 */
class DonorPackModelQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return DonorPackModel[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return DonorPackModel|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
