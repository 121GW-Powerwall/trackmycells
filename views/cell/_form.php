<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cell */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cell-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'donorPack_id')->textInput() ?>

    <?= $form->field($model, 'cellModel_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cellStatus_id')->textInput() ?>

    <?= $form->field($model, 'label')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastTestCapacity_id')->textInput() ?>

    <?= $form->field($model, 'lastTestImp_id')->textInput() ?>

    <?= $form->field($model, 'lastTestVoltage_id')->textInput() ?>

    <?= $form->field($model, 'Notes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
