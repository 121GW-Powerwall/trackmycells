<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Donorpackmodel */

$this->title = 'Update Donorpackmodel: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Donorpackmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="donorpackmodel-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
