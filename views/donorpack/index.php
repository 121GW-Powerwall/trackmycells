<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DonorpackSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Donor Packs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donorpack-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Donor Pack', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id',
            //'cellsAssigned',
            [
                'label' => 'Donor Back Model',
                'attribute' => 'donorPackModel_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=donorpackmodel/view&id=" . $data->donorPackModel_id;
                    return Html::a($data->donorPackModel->name, $url, ['title' => 'Go']);
                }
            ],
            //'user_id',
            //'cellSource_id',
            [
                'label' => 'Source',
                'attribute' => 'cellSource_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=cellSource/view&id=" . $data->cellSource_id;
                    return Html::a($data->cellSource->name, $url, ['title' => 'Go']);
                }
            ],
            'dateAquired',
            'cost',
            'notes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
