<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Donorpack */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donorpack-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cellsAssigned')->textInput() ?>

    <?= $form->field($model, 'donorPackModel_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cellSource_id')->textInput() ?>

    <?= $form->field($model, 'dateAquired')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'notes')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
