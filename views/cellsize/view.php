<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cellsize */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Cellsizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cellsize-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Cell_Size_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Cell_Size_ID], [
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
            'Cell_Size_ID',
            'Name',
        ],
    ]) ?>

</div>
