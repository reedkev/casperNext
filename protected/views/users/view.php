<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Add a User', 'url'=>array('create')),
	array('label'=>'View all Users', 'url'=>array('index')),
	array('label'=>'---------------------------------',),
	array('label'=>'Edit this User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete this User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);

?>

<h1>Details for <?php echo $model->first_name . ' ' , $model->last_name; ?></h1>

<p align="right">
	<a href="/joe/caspernext/index.php?r=users/update&amp;id=<?php echo $model->id ?>" title="Update" class="update"><img alt="Update" src="/joe/caspernext/assets/aa9f7745/gridview/update.png"></a>
</p>	

<?php 
	
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'first_name',
		'last_name',
		'email',
		'active',
		'signup_date',
		'signup_ip_address',		
	),
	)); 

	echo('<br/><br/>');

	echo('<h2>User Session History</h2>');

	/*
	$model_UserSessions = new UserSessions;
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'sessions-grid',
	'dataProvider'=>$model_UserSessions->search(),
	'filter'=>$model_UserSessions,
	'columns'=>array(		
		array(
        	'name'=>'login_date',
            'value'=> 'Yii::app()->dateFormatter->format("d MMM y",$data->login_date)',
        ),
		'login_ip_address',
		'city',
		'region_name',
		'country_name',
	),
	)); 
	*/
?>
