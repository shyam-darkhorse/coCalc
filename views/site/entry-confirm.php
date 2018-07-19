<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>tutorial</label>: <?= Html::encode($model->tutorial) ?></li>
    <li><label>assignment</label>: <?= Html::encode($model->assignment) ?></li>
</ul>