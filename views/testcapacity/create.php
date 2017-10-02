<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testcapacity */

$this->title = 'Create A Test Capacity Datapoint';
$this->params['breadcrumbs'][] = ['label' => 'Test Capacities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcapacity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
