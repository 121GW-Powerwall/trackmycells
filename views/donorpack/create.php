<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DonorPack */

$this->title = 'Create Donor Pack';
$this->params['breadcrumbs'][] = ['label' => 'Donor Packs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donor-pack-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
