<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cellsize */

$this->title = 'Update Cellsize: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Cellsizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Cell_Size_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cellsize-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
