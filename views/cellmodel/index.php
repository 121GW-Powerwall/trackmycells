<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CellmodelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cellmodels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cellmodel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cellmodel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Cell_Model_ID',
            'Manufacture_ID',
            'Cell_Type_ID',
            'Cell_Size_ID',
            'Name',
            // 'Man_Cap',
            // 'Man_Max_V',
            // 'Man_Nom_V',
            // 'Man_Min_V',
            // 'Man_Max_mA',
            // 'Man_Std_mA',
            // 'Man_Charge_V',
            // 'Man_Charge_mA',
            // 'Man_Dis_V',
            // 'Man_Dis_mA',
            // 'Wrap_Color',
            // 'Ring_Color',
            // 'Man_Max_Internal_Imp',
            // 'Man_Spec_Sheet',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
