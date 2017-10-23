<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Donorpack */

$this->title = 'Create Donorpack';
$this->params['breadcrumbs'][] = ['label' => 'Donorpacks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="donorpack-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
