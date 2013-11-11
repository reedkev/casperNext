<?php
/* @var $this CoursesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Courses',
);

//$this->menu=array(
//	array('label'=>'> View Courses', 'url'=>array('index')),
//	array('label'=>'Create Course', 'url'=>array('create')),
//);

$this->widget('zii.widgets.CMenu', array(
                'items' => $this->menu,
                'encodeLabel' => false,
                'htmlOptions' => array(
                    'class' => 'page-sidebar-menu hidden-phone hidden-tablet' //You can customize this for your application
                )
            ));


$this->menu=array(
  array('label'=>'Add a Course', 'url'=>array('create')),
  array('label'=>'View Courses', 'url'=>array('index')),
);
?>

<h1>Courses</h1>

<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 

$this->widget('ext.groupgridview.GroupGridView', array(
      'id' => 'courses-grid',
      'dataProvider'=> $dataProvider,
      'extraRowColumns' => array('faculty'),
      'extraRowPos' => 'above',
      'columns' => array(
    	   'faculty',
          array(
            'name'=>'course_id',
            'htmlOptions' => array('style' => 'white-space: nowrap;')
          ),
		      'name',
          array(
            'class'=>'CButtonColumn',
          ),    
	     ),
    ));


?>
