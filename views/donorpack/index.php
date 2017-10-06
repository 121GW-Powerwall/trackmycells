<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DonorPackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donor Packs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donor-pack-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Donor Pack', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cellsAssigned',
            'donorPackModel_id',
            'user_id',
            'cellSource_id',
            // 'dateAquired',
            // 'cost',
            // 'notes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
