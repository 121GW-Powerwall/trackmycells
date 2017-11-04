<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DonorpackmodelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donorpackmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donorpackmodel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Donorpackmodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cellType_id',
            'cellSize_id',
            'manufacture_id',
            'name',
            // 'numberOfCells',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
