<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CellSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cell-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'donorPack_id') ?>

    <?= $form->field($model, 'cellModel_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'cellStatus_id') ?>

    <?php // echo $form->field($model, 'label') ?>

    <?php // echo $form->field($model, 'lastTestCapacity_id') ?>

    <?php // echo $form->field($model, 'lastTestImp_id') ?>

    <?php // echo $form->field($model, 'lastTestVoltage_id') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
