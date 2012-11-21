<?php
/* @var $this PlacesController */
/* @var $data Places */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_place')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_place), array('view', 'id'=>$data->id_place)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cordX')); ?>:</b>
	<?php echo CHtml::encode($data->cordX); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cordY')); ?>:</b>
	<?php echo CHtml::encode($data->cordY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secondNumber')); ?>:</b>
	<?php echo CHtml::encode($data->secondNumber); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mail')); ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	*/ ?>

</div>