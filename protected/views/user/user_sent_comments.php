<?php foreach($user->comments as $k => $data): ?>
<div class="row-fluid well well-small">
		Comentado no evento: <b><?=$data->event->title;?></b>
		<br />
		<?php
		if($data->rating > 0): ?>
			[+<?=$data->rating?>]&nbsp;&nbsp;<i><?=$data->text;?> - <?=$data->date;?></i>
		<?
		elseif($data->rating == 0): ?>
			[+0]&nbsp;&nbsp;<i><?=$data->text;?> - <?=$data->date;?></i>
		<?
		else: ?>
			[-<?=$data->rating?>]&nbsp;&nbsp;<i><?=$data->text;?> - <?=$data->date;?></i>
		<?
		endif; ?>


		<br />
</div>
<?php endforeach; ?>