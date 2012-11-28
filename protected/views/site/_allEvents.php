<<<<<<< HEAD
 
<?php /*
	$count = 1;
	foreach($events as $k => $event): ?>
		<?
		if($count == 1): ?>		
			<div class="row-fluid">
		<?
		endif; ?>
		
=======
<div class="row-fluid">
	<?php foreach($events as $k => $event): ?>
>>>>>>> Muitas alterações marotas.
		<div class="span4 event-card">
		    <table>
		    	<tr>
		    		<td colspan='2'>
		    			<p><?echo CHtml::image($event->image, 'festinha');?>
		    		</td>
		    	<tr>
		    		<td align='left'>
		    			<b><?php echo $event->Place->name?> | <?php echo $event->getFormatedDate()?></b>
		    		</td>
		    		<td align='right'>
		    			<p><?php echo CHtml::link("Ver detalhes &raquo;",	$this->createUrl('exibeDetalhes', array('idEvent' => $event->id_event)), array('class' => 'btn'));?></p>
						</td>
					</tr>	
				</table>
		</div><!--/span-->
<<<<<<< HEAD
		
		<?
		if($count == 3): ?>
			</div>
			<?
			echo 'entrei';
			$count=1;
		endif; 
		$count++;
	
	endforeach; ?>

</div><!--/row-form-form-->

*/ ?>

<?php foreach($events as $event): ?>

<div class="span4 event-card">
		    <h2><?php echo $event->title; ?></h2>
		    <p><?php echo $event->description; ?></p>
		    <p><a class="btn" href="#">View details &raquo;</a></p>
</div><!--/span-->

<?php endforeach;?>
=======
	<?php endforeach; ?>		
</div>
>>>>>>> Muitas alterações marotas.
