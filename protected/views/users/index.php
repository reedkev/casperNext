<?php
/* @var $this UsersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Users',
);

$this->menu=array(
	array('label'=>'Add a User', 'url'=>array('create')),
	array('label'=>'View all Users', 'url'=>array('index')),
);


?>

<h1>CASPer Users</h1>

<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
///	'itemView'=>'_view',
//)); 


	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'users-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'username',
		'first_name',
		'last_name',
		'email',
		array('name'=>'active',
			'header'=>'Status',
            'value'=>'(($data->active == 1) ? "Active" : "Inactive")', 
        ),
        array(
			'class'=>'CButtonColumn',
		),
	),
));
?>	

