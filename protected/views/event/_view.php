<?php
/* @var $this EventController */
/* @var $data Event */
?>

<div class="row-fluid well well-small">
	<div class="span4 event-image">
	<?php echo CHtml::image($data->image, '', array('width'=>240))?>
	</div>
	
	<div class="span8 event-description">
	<h3><?php echo CHtml::encode($data->title); ?></h3>
	<p><?php echo CHtml::encode($data->description); ?></p>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_time')); ?>:</b>
		<?php echo CHtml::encode($data->date_time); ?>
		<br />
		
	<b><?php echo CHtml::encode($data->getAttributeLabel('numberGirls')); ?>:</b>
		<?php echo CHtml::encode($data->numberGirls); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('numberMen')); ?>:</b>
		<?php echo CHtml::encode($data->numberMen); ?>
		<br />
		
		<b><?php echo CHtml::encode($data->getAttributeLabel('priceMan')); ?>:</b>
		<?php echo CHtml::encode($data->priceMan); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('priceGirl')); ?>:</b>
		<?php echo CHtml::encode($data->priceGirl); ?>
		<br />
		
		<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
		<?php echo CHtml::encode($data->eventType->description); ?>
		<br />
	</div>
</div>