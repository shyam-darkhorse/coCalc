<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Coattainment */

$this->title = $model->CO_NO;
$this->params['breadcrumbs'][] = ['label' => 'Coattainments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coattainment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->CO_NO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->CO_NO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CO_NO',
            'AssignmentPresentation',
            'Tutorial',
            'CIA_Test',
            'SEE',
        ],
    ]) ?>

</div>
