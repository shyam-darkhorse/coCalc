<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Coattainment */

$this->title = 'Update Coattainment: ' . $model->CO_NO;
$this->params['breadcrumbs'][] = ['label' => 'Coattainments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->CO_NO, 'url' => ['view', 'id' => $model->CO_NO]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="coattainment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
