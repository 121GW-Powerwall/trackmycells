<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DonorPackSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donor-pack-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cellsAssigned') ?>

    <?= $form->field($model, 'donorPackModel_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'cellSource_id') ?>

    <?php // echo $form->field($model, 'dateAquired') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>