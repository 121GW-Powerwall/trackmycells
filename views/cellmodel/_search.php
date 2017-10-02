<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CellmodelSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cellmodel-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cell_Model_ID') ?>

    <?= $form->field($model, 'Manufacture_ID') ?>

    <?= $form->field($model, 'Cell_Type_ID') ?>

    <?= $form->field($model, 'Cell_Size_ID') ?>

    <?= $form->field($model, 'Name') ?>

    <?php // echo $form->field($model, 'Man_Cap') ?>

    <?php // echo $form->field($model, 'Man_Max_V') ?>

    <?php // echo $form->field($model, 'Man_Nom_V') ?>

    <?php // echo $form->field($model, 'Man_Min_V') ?>

    <?php // echo $form->field($model, 'Man_Max_mA') ?>

    <?php // echo $form->field($model, 'Man_Std_mA') ?>

    <?php // echo $form->field($model, 'Man_Charge_V') ?>

    <?php // echo $form->field($model, 'Man_Charge_mA') ?>

    <?php // echo $form->field($model, 'Man_Dis_V') ?>

    <?php // echo $form->field($model, 'Man_Dis_mA') ?>

    <?php // echo $form->field($model, 'Wrap_Color') ?>

    <?php // echo $form->field($model, 'Ring_Color') ?>

    <?php // echo $form->field($model, 'Man_Max_Internal_Imp') ?>

    <?php // echo $form->field($model, 'Man_Spec_Sheet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
