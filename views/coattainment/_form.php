<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coattainment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coattainment-form">

    <?php $form = ActiveForm::begin(); ?>

    

    <?= $form->field($model, 'AssignmentPresentation')->textInput() ?>

    <?= $form->field($model, 'Tutorial')->textInput() ?>

    <?= $form->field($model, 'CIA_Test')->textInput() ?>

    <?= $form->field($model, 'SEE')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
