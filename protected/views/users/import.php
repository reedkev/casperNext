<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Import',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Import from Excel', 'url'=>array('import')),
	array('label'=>'Generate Test Data', 'url'=>array('generate')),
);
?>

<h1>Import Excel Data</h1>

