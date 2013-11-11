<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Add a User', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('index')),
);
?>

<h1>Update <?php echo $model->first_name . ' ' . $model->last_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>