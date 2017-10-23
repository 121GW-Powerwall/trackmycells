<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cellsize */

$this->title = 'Create Cellsize';
$this->params['breadcrumbs'][] = ['label' => 'Cellsizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cellsize-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
