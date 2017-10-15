<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestcapacitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Capacity tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcapacity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Add a capacity test', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'cell_id' => 'cell.label',
            'capacity',
            'testDate',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
