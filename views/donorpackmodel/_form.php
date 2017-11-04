<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Donorpackmodel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="donorpackmodel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cellType_id')->textInput() ?>

    <?= $form->field($model, 'cellSize_id')->textInput() ?>

    <?= $form->field($model, 'manufacture_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numberOfCells')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
