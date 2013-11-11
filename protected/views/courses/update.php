<?php
/* @var $this CoursesController */
/* @var $model Courses */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
  	array('label'=>'Add a Course', 'url'=>array('create')),
  	array('label'=>'View Courses', 'url'=>array('index')),
	array('label'=>'-------------', 'url'=>''),
	array('label'=>'Edit this Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('update','id'=>$model->id)	)),
	array('label'=>'Delete this Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);

?>

<h1>Update <?php echo $model->name	; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>