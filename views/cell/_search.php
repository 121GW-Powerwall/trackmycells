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

    <?= $form->field($model, 'Cell_ID') ?>

    <?= $form->field($model, 'Donor_Pack_ID') ?>

    <?= $form->field($model, 'Cell_Model_ID') ?>

    <?= $form->field($model, 'User_ID') ?>

    <?= $form->field($model, 'Cell_Status_ID') ?>

    <?php // echo $form->field($model, 'Cell_Label') ?>

    <?php // echo $form->field($model, 'Last_Capacity_Test_ID') ?>

    <?php // echo $form->field($model, 'Last_Imp_Test_ID') ?>

    <?php // echo $form->field($model, 'Last_Voltage_Test_ID') ?>

    <?php // echo $form->field($model, 'Notes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
