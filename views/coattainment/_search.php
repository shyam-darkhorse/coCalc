<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoattainmentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coattainment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'CO_NO') ?>

    <?= $form->field($model, 'AssignmentPresentation') ?>

    <?= $form->field($model, 'Tutorial') ?>

    <?= $form->field($model, 'CIA_Test') ?>

    <?= $form->field($model, 'SEE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
