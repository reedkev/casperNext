<?php
/* @var $this TestsController */
/* @var $data Tests */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_id')); ?>:</b>
	<?php echo CHtml::encode($data->course_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_overall')); ?>:</b>
	<?php echo CHtml::encode($data->time_overall); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time_page_default')); ?>:</b>
	<?php echo CHtml::encode($data->time_page_default); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('allowed_attempts')); ?>:</b>
	<?php echo CHtml::encode($data->allowed_attempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prerequisite')); ?>:</b>
	<?php echo CHtml::encode($data->prerequisite); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('antirequisite')); ?>:</b>
	<?php echo CHtml::encode($data->antirequisite); ?>
	<br />

	*/ ?>

</div>