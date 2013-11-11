<?php
/* @var $this CoursesController */
/* @var $model Courses */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Create',
);

$this->menu=array(
  array('label'=>'Add a Course', 'url'=>array('create')),
  array('label'=>'View Courses', 'url'=>array('index')),
);

?>

<h1>Create a Course</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>