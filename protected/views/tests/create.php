<?php
/* @var $this TestsController */
/* @var $model Tests */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tests', 'url'=>array('index')),
	array('label'=>'Manage Tests', 'url'=>array('admin')),
);
?>

<h1>Create Tests</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>