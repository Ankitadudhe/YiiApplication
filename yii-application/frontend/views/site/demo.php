<?php
use yii\helpers\Html;
use app\models\Posts;
/* @var $this yii\web\View */

$ob1=new Posts;
$res=$ob1->getrecord();
$data=$ob1->getid();
$tit=$ob1->gettitle();
$this->title = ' Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1 style="color:#337ab7">Yii2 Application </h1>
 </div>
<div class="row">
<span style="margin-bottom:20px"><?= Html::a('Create',['/site/create'],['class'=>'btn btn-primary']) ?></span>
</div>
    <div class="body-content">
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
    

      <th>ID</th>
      <th>Title</th>
      <th>Description</th>
      <th>Catagory</th>
      <th>Action</th>
    </tr>

  </thead>
  <tbody>
<?php if(count($res)>0): ?>
<?php  foreach($res as $ret): ?>
    <tr class="active">
    <th scope="row"><?php echo $data['id'] ?></th>
      <td><?php echo($tit['title']) ?></td>
      <td></td>
      <td>Column content</td>
      <td>
      <span><?= Html::a('View') ?></span> 
      <span><?= Html::a('Update') ?></span> 
      <span><?= Html::a('Delete') ?></span> 
    </tr>
<?php endforeach; ?>
<?php else: ?>
<tr>

<td>No records found</td>
</tr>
<?php endif; ?>
  </tbody>
</table> 
       
           

    </div>
</div>
