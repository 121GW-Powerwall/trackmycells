<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cell */

$this->title = $model->Cell_ID;
$this->params['breadcrumbs'][] = ['label' => 'Cells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cell-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Cell_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Cell_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Cell_ID',
            'Donor_Pack_ID',
            'Cell_Model_ID',
            'User_ID',
            'Cell_Status_ID',
            'Cell_Label',
            'Last_Capacity_Test_ID',
            'Last_Imp_Test_ID',
            'Last_Voltage_Test_ID',
            'Notes',
        ],
    ]) ?>

</div>
