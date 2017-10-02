<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cell */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cell-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Donor_Pack_ID')->textInput() ?>

    <?= $form->field($model, 'Cell_Model_ID')->textInput() ?>

    <?= $form->field($model, 'User_ID')->textInput() ?>

    <?= $form->field($model, 'Cell_Status_ID')->textInput() ?>

    <?= $form->field($model, 'Cell_Label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Last_Capacity_Test_ID')->textInput() ?>

    <?= $form->field($model, 'Last_Imp_Test_ID')->textInput() ?>

    <?= $form->field($model, 'Last_Voltage_Test_ID')->textInput() ?>

    <?= $form->field($model, 'Notes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
