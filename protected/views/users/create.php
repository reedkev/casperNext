<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Add a User', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('index')),
);
?>

<h1>Create a User</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
						)); ?>