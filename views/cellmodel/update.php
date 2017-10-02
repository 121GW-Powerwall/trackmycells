<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cellmodel */

$this->title = 'Update Cellmodel: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Cellmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Cell_Model_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cellmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
