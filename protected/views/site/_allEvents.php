<div class="row-fluid">
	<?php foreach($events as $k => $event): ?>
		<div class="span4 event-card">
		    <table>
		    	<tr>
		    		<td colspan='2'>
		    			<p><?echo CHtml::image($event->image, 'festinha');?>
		    		</td>
		    	<tr>
		    		<td align='left'>
		    			<b><?php echo $event->place->name?> | <?php echo $event->getFormatedDate()?></b>
		    		</td>
		    		<td align='right'>
		    			<p><?php echo CHtml::link("Ver detalhes &raquo;",	$this->createUrl('exibeDetalhes', array('idEvent' => $event->id_event)), array('class' => 'btn'));?></p>
						</td>
					</tr>	
				</table>
		</div><!--/span-->
	<?php endforeach; ?>
</div><!--/row-form-form-->