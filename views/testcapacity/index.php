<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestcapacitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Testcapacities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcapacity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Testcapacity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cellId',
            'capacity',
            'testDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
