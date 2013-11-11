<?php
/* @var $this TestsController */
/* @var $model Tests */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tests-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'course_id'); ?>
		<?php echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_overall'); ?>
		<?php echo $form->textField($model,'time_overall'); ?>
		<?php echo $form->error($model,'time_overall'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'time_page_default'); ?>
		<?php echo $form->textField($model,'time_page_default',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'time_page_default'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'allowed_attempts'); ?>
		<?php echo $form->textField($model,'allowed_attempts'); ?>
		<?php echo $form->error($model,'allowed_attempts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prerequisite'); ?>
		<?php echo $form->textField($model,'prerequisite'); ?>
		<?php echo $form->error($model,'prerequisite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'antirequisite'); ?>
		<?php echo $form->textField($model,'antirequisite'); ?>
		<?php echo $form->error($model,'antirequisite'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->