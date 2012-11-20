<div class="row-fluid">
  
<?
	foreach($events as $k => $event): ?>
		<div class="span4 event-card">
		    <h2><?=$event->title?></h2>
		    <p><?=$event->description?></p>
		    <p><a class="btn" href="#">View details &raquo;</a></p>
		</div><!--/span-->
	<?
	endforeach; ?>

</div><!--/row-form-form-->