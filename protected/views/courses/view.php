<?php
/* @var $this CoursesController */
/* @var $model Courses */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->name,
);

$this->menu=array(
  	array('label'=>'Add a Course', 'url'=>array('create')),
  	array('label'=>'View Courses', 'url'=>array('index')),

	array('label'=>'Edit this Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('update','id'=>$model->id))),
	array('label'=>'Delete this Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1><?php echo $model->name	; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'group_id',
		'course_id',
		'name',
		'description',
		'faculty',
		'allowed_attempts_default',
		'allowed_test_count',
	),
));  ?>

<br/><br/>
<div class="spanHalf">
	<h3>Upcoming Tests</h3>
	<?php
		$tests=Tests::model()->find(array(
    		'select'=>'name',
    		'condition'=>'course_id=:course_id',
    		'params'=>array(':course_id'=>$model->id),
		));

		if (Tests::model()->count("course_id = " . $model->id) != 0) {

			foreach($tests->name as $test)
	    		echo $test->name;
		}
		else 
		{
			echo('
					There are no tests for this course.<br/>
					<a href="#" onclick="alert(\'coming soon\');">Add a new test</a>

				');
		}
	?>
</div>

<div class="spanHalf">
	<h3>Registered Students</h3>
	<?php
		$tests=Tests::model()->find(array(
    		'select'=>'name',
    		'condition'=>'course_id=:course_id',
    		'params'=>array(':course_id'=>$model->id),
		));

		if (Tests::model()->count("course_id = " . $model->id) != 0) {

			foreach($tests->name as $test)
	    		echo $test->name;
		}
		else 
		{
			echo('
					There are no students registered for this course.<br/>
					<ul>
						<li><a href="#" onclick="alert(\'coming soon\');">Add a new student</a></li>
						<li><a href="#" onclick="alert(\'coming soon\');">upload a list of students</a></li>
					</ul>
				');
		}
		
	?>
</div>
<br clear="all"/><br/><br/><br/>
<div class="spanHalf">
	<h3>Assigned Markers</h3>

	<?php
		$tests=Tests::model()->find(array(
    		'select'=>'name',
    		'condition'=>'course_id=:course_id',
    		'params'=>array(':course_id'=>$model->id),
		));

		if (Tests::model()->count("course_id = " . $model->id) != 0) {

			foreach($tests->name as $test)
	    		echo $test->name;
		}
		else 
		{
			echo('
					There are no markers registered for this course.<br/>
					<ul>
						<li><a href="#" onclick="alert(\'coming soon\');">Add a new marker</a></li>
					</ul>
				');
		}
		
	?>
	
</div>
 