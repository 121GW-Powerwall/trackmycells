<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Celltype]].
 *
 * @see Celltype
 */
class CelltypeQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Celltype[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Celltype|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
