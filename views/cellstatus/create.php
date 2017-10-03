<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CellStatus */

$this->title = 'Create Cell Status';
$this->params['breadcrumbs'][] = ['label' => 'Cell Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cell-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
