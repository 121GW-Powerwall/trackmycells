<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cell */

$this->title = 'Create Cell';
$this->params['breadcrumbs'][] = ['label' => 'Cells', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cell-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
