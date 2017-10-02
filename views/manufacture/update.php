<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manufacture */

$this->title = 'Update Manufacture: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Manufactures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->Manufacture_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manufacture-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
