<?php
$tz = 'America/New_York';
$dt = new DateTime("now", new DateTimeZone($tz)); 
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Cell;

/* @var $this yii\web\View */
/* @var $model app\models\Testcapacity */
/* @var $form yii\widgets\ActiveForm */

$model->testDate=$dt->format('Y-m-d H:i:s');
?>

<div class="testcapacity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cell_id')->dropDownList(
        ArrayHelper::map(Cell::find()->all(),'id','label'),
            ['prompt'=>'Select Cell']
    )  ?>

    <?= $form->field($model, 'capacity')->textInput() ?>

    <?= $form->field($model, 'testDate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
