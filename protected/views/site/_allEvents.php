<?php for($i=0; $i < count($events); $i+=3):?>
<div class="row-fluid">
	<?php if($i < count($events)):?>
	<?php $event = $events[$i]?>
	<div class="span4 event-card">
		    <table>
		    	<tr>
		    		<td colspan='2'>
		    			<p><?php echo CHtml::image($event->image, 'festinha');?>
		    		</td>
		    	<tr>
		    		<td align='left'>
		    			<b><?php echo $event->place->name?> | <?php echo $event->getFormatedDate()?></b>
		    		</td>
		    		<td align='right'>
		    			<p><?php echo CHtml::link("Ver detalhes &raquo;",	$this->createUrl('exibeDetalhes', array('idEvent' => $event->id_event)), array('class' => 'btn btn-inverse'));?></p>
						</td>
					</tr>	
				</table>
		</div><!--/span-->
	<?php endif;?>
	<?php if($i+1 < count($events)):?>
	<?php $event = $events[$i+1]?>
	<div class="span4 event-card">
		    <table>
		    	<tr>
		    		<td colspan='2'>
		    			<p><?php echo CHtml::image($event->image, 'festinha');?>
		    		</td>
		    	<tr>
		    		<td align='left'>
		    			<b><?php echo $event->place->name?> | <?php echo $event->getFormatedDate()?></b>
		    		</td>
		    		<td align='right'>
		    			<p><?php echo CHtml::link("Ver detalhes &raquo;",	$this->createUrl('exibeDetalhes', array('idEvent' => $event->id_event)), array('class' => 'btn btn-inverse'));?></p>
						</td>
					</tr>	
				</table>
		</div><!--/span-->
	<?php endif;?>
	<?php if($i+2 < count($events)):?>
	<?php $event = $events[$i+2]?>
	<div class="span4 event-card">
		    <table>
		    	<tr>
		    		<td colspan='2'>
		    			<p><?php echo CHtml::image($event->image, 'festinha');?>
		    		</td>
		    	<tr>
		    		<td align='left'>
		    			<b><?php echo $event->place->name?> | <?php echo $event->getFormatedDate()?></b>
		    		</td>
		    		<td align='right'>
		    			<p><?php echo CHtml::link("Ver detalhes &raquo;",	$this->createUrl('exibeDetalhes', array('idEvent' => $event->id_event)), array('class' => 'btn btn-inverse'));?></p>
						</td>
					</tr>	
				</table>
		</div><!--/span-->
	<?php endif;?>
</div><!--/row-->
<?php endfor;?>
