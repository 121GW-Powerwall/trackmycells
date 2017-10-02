<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cellmodel */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Cellmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cellmodel-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Cell_Model_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Cell_Model_ID], [
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
            'Cell_Model_ID',
            'Manufacture_ID',
            'Cell_Type_ID',
            'Cell_Size_ID',
            'Name',
            'Man_Cap',
            'Man_Max_V',
            'Man_Nom_V',
            'Man_Min_V',
            'Man_Max_mA',
            'Man_Std_mA',
            'Man_Charge_V',
            'Man_Charge_mA',
            'Man_Dis_V',
            'Man_Dis_mA',
            'Wrap_Color',
            'Ring_Color',
            'Man_Max_Internal_Imp',
            'Man_Spec_Sheet',
        ],
    ]) ?>

</div>
