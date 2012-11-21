<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_event'); ?>
		<?php echo $form->textField($model,'id_event'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberGirls'); ?>
		<?php echo $form->textField($model,'numberGirls'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numberMen'); ?>
		<?php echo $form->textField($model,'numberMen'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_place'); ?>
		<?php echo $form->textField($model,'id_place'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_time'); ?>
		<?php echo $form->textField($model,'date_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priceMan'); ?>
		<?php echo $form->textField($model,'priceMan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priceGirl'); ?>
		<?php echo $form->textField($model,'priceGirl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumableMan'); ?>
		<?php echo $form->textField($model,'consumableMan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'consumableGirl'); ?>
		<?php echo $form->textField($model,'consumableGirl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priority'); ?>
		<?php echo $form->textField($model,'priority'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->