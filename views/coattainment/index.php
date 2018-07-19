<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoattainmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Co Attainments';
$this->params['breadcrumbs'][] = $this->title;
$form = ActiveForm::begin([
    'id' => 'active-form',
    'options' => [
		'class' => 'form-horizontal',
		'enctype' => 'multipart/form-data'
	],
])?>
<html>
<head>
<style>
table {
    
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}


</style>
</head>
<body>

<h2>CO Selection </h2>




<table class="co-selection">
<tr>
<td>Assignment presentation</td>
<td><?= $form->field($model, 'CO1')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO2')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO3')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO4')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO5')->checkbox(); ?></td>
<td><input type="text" name="checkedsizes_1" id="checkedsizes_1" value="0" size=5></td>

</tr>
<tr>
<td>Tutorial</td>
<td><?= $form->field($model, 'CO1')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO2')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO3')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO4')->checkbox(); ?></td>
<td><?= $form->field($model, 'CO5')->checkbox(); ?></td>
<td><input type="text" name="checkedsizes_2" id="checkedsizes_2" value="0" size=5></td>

</tr>
</table>
<br>
<center><input type="button" id="continue" value="continue"></center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$(function(){
    $('#continue').on('click',function(){submitFunction();});
});

function submitFunction (){

    alert("call countchecks");   
    countChecks();
    alert("checkedsizes populated");      
    alert("continue with submit");      
}

function countChecks(){
     $('.co-selection tr').each(function(){
         var count = 0;
         var hdn = $(this).find('input[name^="checkedsizes"]');
         count = $(this).find(':checkbox:checked').length;
         hdn.val(count);
     });
}

</script>

</body>
</html>





<?php ActiveForm::end();

?>
<div class="coattainment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
		
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'CO_NO',
            'AssignmentPresentation',
            'Tutorial',
            'CIA_Test',
            'SEE',
            
            
			
			 [
            'class' => 'yii\grid\ActionColumn',
            'template' => ' {update}',
        ],
			 
        ],
    ]); ?>
</div>
