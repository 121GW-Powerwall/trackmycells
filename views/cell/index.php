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
            ['class' => 'yii\grid\SerialColumn'],

            'Cell_ID',
            //'Donor_Pack_ID',
            //'Cell_Model_ID',
            //'User_ID',
            //'Cell_Status_ID',
            'Cell_Label',
            //'Last_Capacity_Test_ID',
            //'Last_Imp_Test_ID',
            //'Last_Voltage_Test_ID',
            'Notes',
                
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
