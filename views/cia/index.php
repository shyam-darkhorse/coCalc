<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CiaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cia', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'age',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
