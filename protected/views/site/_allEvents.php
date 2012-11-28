 
<?php /*
	$count = 1;
	foreach($events as $k => $event): ?>
		<?
		if($count == 1): ?>		
			<div class="row-fluid">
		<?
		endif; ?>
		
		<div class="span4 event-card">
		    <h2><?=$event->title?></h2>
		    <p><?=$event->description?></p>
		    <p><a class="btn" href="#">View details &raquo;</a></p>
		</div><!--/span-->
		
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