
<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<table><tr>
    <td><?= $form->field($model, 'tutorial') ?></td>

  <td>  <?= $form->field($model, 'assignment') ?></td>
	<td><?= $form->field($model, 'ca') ?></td>
	<td><?= $form->field($model, 'see') ?></td>
</tr>

</table>
    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

