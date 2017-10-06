<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testcapacity */

$this->title = 'Add a capacity test';
$this->params['breadcrumbs'][] = ['label' => 'Capacity tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testcapacity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
