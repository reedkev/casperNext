<?php
/* @var $this CoursesController */
/* @var $data Courses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_id')); ?>:</b>
	<?php echo CHtml::encode($data->group_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('faculty')); ?>:</b>
	<?php echo CHtml::encode($data->faculty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('allowed_attempts_default')); ?>:</b>
	<?php echo CHtml::encode($data->allowed_attempts_default); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('allowed_test_count')); ?>:</b>
	<?php echo CHtml::encode($data->allowed_test_count); ?>
	<br />

	*/ ?>

</div>