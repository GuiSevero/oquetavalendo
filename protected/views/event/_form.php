<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
	
		<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image'); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'id_place'); ?>
		<?php echo $form->dropDownList($model,'id_place', CHtml::listData(Places::model()->findAll(), 'id_place', 'name'), array('prompt'=>'Selecione o Local')); ?>
		<?php echo $form->error($model,'id_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberGirls'); ?>
		<?php echo $form->textField($model,'numberGirls'); ?>
		<?php echo $form->error($model,'numberGirls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberMen'); ?>
		<?php echo $form->textField($model,'numberMen'); ?>
		<?php echo $form->error($model,'numberMen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
		<?php echo $form->error($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceMan'); ?>
		<?php echo $form->textField($model,'priceMan'); ?>
		<?php echo $form->error($model,'priceMan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priceGirl'); ?>
		<?php echo $form->textField($model,'priceGirl'); ?>
		<?php echo $form->error($model,'priceGirl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumableMan'); ?>
		<?php echo $form->textField($model,'consumableMan'); ?>
		<?php echo $form->error($model,'consumableMan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'consumableGirl'); ?>
		<?php echo $form->textField($model,'consumableGirl'); ?>
		<?php echo $form->error($model,'consumableGirl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
		<?php echo $form->error($model,'priority'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->dropDownList($model,'type', CHtml::listData(EventType::model()->findAll(), 'id_type', 'description'), array('prompt'=>'Selecione um tipo')); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->