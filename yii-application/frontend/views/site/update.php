<?php
use yii\helpers\html;
use app\models\Posts;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$ob1=new Posts;
$res=$ob1->getrecord();


$this->title = ' Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 style="color:#337ab7">UPDATE POST </h1>
 </div>

    <div class="body-content">
    <?php 
    $form = ActiveForm::begin() ?>
    
 <div class="row">
 <div class="form-control"></div>
 <div class ="col-lg-6">
 <?= $form->field($model,'title'); ?>
 <?= $form->field($model, 'discription')->textarea(['rows'=>'6']) ?>
 </div>
  </div> 
  <div class="row">
<span style="margin-bottom:20px"><?= Html::a('Update post',['/site/update'],['class'=>'btn btn-primary']) ?></span>

<a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary">Go back</a>
 
</div>   
 </div>      
       
  <?php ActiveForm::end() ?>
    </div>
</div>
