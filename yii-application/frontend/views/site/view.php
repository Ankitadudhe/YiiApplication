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
        <h1 style="color:#337ab7">VIEW POST </h1>
                <ul class="list-group">
        <li class="list-group-item">
        Title
        </li>
        <li class="list-group-item">
        Description
        </li>
        <li class="list-group-item">
        Category
        </li>
        </ul>
        <div>
   <a href=<?php echo yii::$app->homeUrl; ?> class="btn btn-primary">Go back</a>
</div>
 </div>

    <div class="body-content">
  
    
</div>
