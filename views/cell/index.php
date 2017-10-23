<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CellSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cells';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cell-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cell', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            [
                'label' => 'Cell Label',
                'attribute' => 'label',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=cell/view&id=" . $data->id;
                    return Html::a($data->label, $url, ['title' => 'Go']);
                }
            ],
            // 'label',
            // 'id:text:Test ID',
            // 'donorPack_id',
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
            //'cellModel_id',
            //'user_id',
            [
                'label' => 'Cell Status',
                'attribute' => 'cellStatus_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=cellStatus/view&id=" . $data->cellStatus_id;
                    return Html::a($data->cellStatus->name, $url, ['title' => 'Go']);
                }
            ],
            // 'cellStatus_id',
            // 'lastTestCapacity_id',
            // 'lastTestImp_id',
            // 'lastTestVoltage_id',
            'Notes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
