<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cellmodel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cellmodel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Manufacture_ID')->textInput() ?>

    <?= $form->field($model, 'Cell_Type_ID')->textInput() ?>

    <?= $form->field($model, 'Cell_Size_ID')->textInput() ?>

    <?= $form->field($model, 'Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Man_Cap')->textInput() ?>

    <?= $form->field($model, 'Man_Max_V')->textInput() ?>

    <?= $form->field($model, 'Man_Nom_V')->textInput() ?>

    <?= $form->field($model, 'Man_Min_V')->textInput() ?>

    <?= $form->field($model, 'Man_Max_mA')->textInput() ?>

    <?= $form->field($model, 'Man_Std_mA')->textInput() ?>

    <?= $form->field($model, 'Man_Charge_V')->textInput() ?>

    <?= $form->field($model, 'Man_Charge_mA')->textInput() ?>

    <?= $form->field($model, 'Man_Dis_V')->textInput() ?>

    <?= $form->field($model, 'Man_Dis_mA')->textInput() ?>

    <?= $form->field($model, 'Wrap_Color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ring_Color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Man_Max_Internal_Imp')->textInput() ?>

    <?= $form->field($model, 'Man_Spec_Sheet')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
