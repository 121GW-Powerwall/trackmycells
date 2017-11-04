<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Donorpackmodel */

$this->title = 'Create Donorpackmodel';
$this->params['breadcrumbs'][] = ['label' => 'Donorpackmodels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donorpackmodel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
