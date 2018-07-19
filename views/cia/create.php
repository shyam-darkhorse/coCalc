<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cia */

$this->title = 'Create Cia';
$this->params['breadcrumbs'][] = ['label' => 'Cias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
