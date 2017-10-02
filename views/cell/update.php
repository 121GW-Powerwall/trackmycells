<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cell */

$this->title = 'Update Cell: ' . $model->Cell_ID;
$this->params['breadcrumbs'][] = ['label' => 'Cells', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Cell_ID, 'url' => ['view', 'id' => $model->Cell_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cell-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>