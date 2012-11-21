<?php
/* @var $this EventController */
/* @var $data Event */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_event')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_event), array('view', 'id'=>$data->id_event)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberGirls')); ?>:</b>
	<?php echo CHtml::encode($data->numberGirls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberMen')); ?>:</b>
	<?php echo CHtml::encode($data->numberMen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_place')); ?>:</b>
	<?php echo CHtml::encode($data->id_place); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
	<?php echo CHtml::encode($data->date_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priceMan')); ?>:</b>
	<?php echo CHtml::encode($data->priceMan); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('priceGirl')); ?>:</b>
	<?php echo CHtml::encode($data->priceGirl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumableMan')); ?>:</b>
	<?php echo CHtml::encode($data->consumableMan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('consumableGirl')); ?>:</b>
	<?php echo CHtml::encode($data->consumableGirl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priority')); ?>:</b>
	<?php echo CHtml::encode($data->priority); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	*/ ?>

</div>