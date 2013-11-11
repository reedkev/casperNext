<?php
/* @var $this CoursesController */
/* @var $model Courses */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	'Manage',
);

$this->menu=array(
  array('label'=>'Add a Course', 'url'=>array('create')),
  array('label'=>'View Courses', 'url'=>array('index')),
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#courses-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Manage Courses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php 
	
	//$this->renderPartial('_search',array(
	//'model'=>$model,
	//)); 
?>
</div>

<?php 

$this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'courses-grid',
      'dataProvider'=> $dataProvider,
      'extraRowColumns' => array('faculty'),
      'extraRowPos' => 'above',
      'columns' => array(
    	'faculty',
		'course_id',
		'name',
	  ),
    ));

/*
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'courses-grid2',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'group_id',
		'faculty',
		'course_id',
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
	)); 
*/
?>
