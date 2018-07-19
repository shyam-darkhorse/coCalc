<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Coattainment */

$this->title = 'Create Coattainment';
$this->params['breadcrumbs'][] = ['label' => 'Coattainments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coattainment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
