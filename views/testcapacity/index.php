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
            #['class' => 'yii\grid\SerialColumn'],
            'id:text:Test ID',
            [
                'label' => 'Cell Label',
                'attribute' => 'cell_id',
                'format' => 'raw',
                'value' => function($data){
                    $url = "index.php?r=cell/view&id=" . $data->cell_id;
                    return Html::a($data->cell->label, $url, ['title' => 'Go']);
                }
            ],
            #'cell_id' => 'cell.label:text:Cell Label',
            'capacity',
            'testDate',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
