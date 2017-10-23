<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Cell */
/* @var $searchModel app\models\CellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


$this->title = $model->label;
$this->params['breadcrumbs'][] = ['label' => 'Cells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$providerct = new yii\data\ActiveDataProvider([
        'query' => $model->getTestCapacities() 
]);
$providervt = new yii\data\ActiveDataProvider([
        'query' => $model->getTestVoltages()
]);
$providerimp = new yii\data\ActiveDataProvider([
        'query' => $model->getTestImps()
]);
?>
<div class="cell-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'label',
            [
                'label' => 'Donor Pack',
                'attribute' => 'donorPack_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=donorpack/view&id=" . $data->donorPack_id;
                    return Html::a($data->donorPack->donorPackModel->name, $url, ['title' => 'Go']);
                }
            ],
            [
                'label' => 'Cell Model',
                'attribute' => 'cellModel_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=cellModel/view&id=" . $data->cellModel_id;
                    return Html::a($data->cellModel->name, $url, ['title' => 'Go']);
                }
            ],
            'user_id',
            [
                'label' => 'Cell Status',
                'attribute' => 'cellStatus_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=cellStatus/view&id=" . $data->cellStatus_id;
                    return Html::a($data->cellStatus->name, $url, ['title' => 'Go']);
                }
            ],
            //'lastTestCapacity_id',
            //'lastTestImp_id',
            //'lastTestVoltage_id',
            'Notes',
        ],
    ]) ?>

    <div class="row">
            <div class="col-lg-4">
                <h2>Capacity Tests</h2>
                <?= GridView::widget([
                    'dataProvider' => $providerct,
                    'columns' => [
                        'testDate',
                        [
                            'label' => 'Capacity',
                            'attribute' => 'capacity',
                            'format' => 'raw',
                            'value' => function($data){
                                $url = "index.php?r=testcapacity%2Fview&id=" . $data->id;
                                return Html::a($data->capacity, $url, ['title' => 'Go']);
                            }
                        ],
                    ],
                ]); 
                ?>
            </div>
            <div class="col-lg-4">
                <h2>Voltage Tests</h2>
                <?= GridView::widget([
                    'dataProvider' => $providervt,
                    'columns' => [
                        'testDate',
                        'volt',
                    ],
                ]); 
                ?>
            </div>
            <div class="col-lg-4">
                <h2>Internal Resistance Tests</h2>
                    <?= GridView::widget([
                    'dataProvider' => $providerimp,
                    'columns' => [
                        'testDate',
                        'impedance',
                    ],
                ]); 
                ?>
            </div>
    </div>
</div>


