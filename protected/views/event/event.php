<form name='event' method='POST'>
	
	<div class="hero-unit">
	  <h1><?php echo $event->title?></h1>
	  <br />
	  <table border=0>
		  <tr>
				<td colspan='2' align='right'>
						<div>
							<div id='vou' <?php echo (!$vou) ? "" : "style='display:none;'"; ?>>
			        <?php 
			        	echo CHtml::ajaxButton("Vou!", 
				        	CController::createUrl("user/irNaoIr"), 
				          array("type" => "GET",
				                "data" => array("valueVou" => 1, 
				                							"idEvent"=> $event->id_event),
				                "success" => 'function(){
				                                $("#vou").hide();
				                                $("#naoVou").show();
				                              }'
				        	),
				        	array('class' => 'btn btn-success')); ?>
				    	</div>	
		      
				  	<div id='naoVou' <?php echo ($vou) ? "" : "style='display:none;'"; ?>>
		      		<?php
		      	 	echo CHtml::ajaxButton("Não vou mais", 
			        	CController::createUrl("user/irNaoIr"), 
			          array("type" => "GET",
			                "data" => array("valueVou" => 0,
				                								"idEvent" => $event->id_event),
			                "success" => 'function(dados){
			                                $("#naoVou").hide();
				                              $("#vou").show();
			                              }'
			        	),
			        	array('class' => 'btn btn-danger'));?>
			       </div>
			    </div>
			  </td>
			</tr>
		 	<tr>
		  	<td rowspan='5' width='30%'>
			   	<p><?echo CHtml::image($event->image, 'festinha');?></p>
			  </td>
		  	<td>
		  		<p><b>Data: </b> <?php echo $event->getFormatedDate()?> às <?php echo $event->getHora()?></p>
		  	</td>
		  </tr>
		  <tr>
		  	<td>
		  		<p><b>Local:</b> <?php echo $event->place->name?></p>
		  	</td>
		  </tr>
		  <tr>
		  	<td>
		  		<p><b>Endereço:</b> <?php echo $event->place->address?></p>
		  	</td>
		  </tr>
		  <tr>
		  	<td>
		  		<p><b>Descrição:</b> <?php echo $event->description?></p>
		  	</td>
		  </tr>
		  <tr>
		  	<td>
		  		<p><b>Preço:</b> R$ <?php echo $event->priceMan?> Masculino | R$ <?php echo $event->priceGirl?> Feminino</p>
				</td>
			</tr>
		</table>

	<div>

	<?//$this->widget('comments.widgets.ECommentsListWidget', array(
    //'model' => $event,
	//));

?>
		<center>
			<b>Comentários</b>
		</center>
		<table class='table-bordered table-striped' width='100%'>
				<?php foreach($comments as $comment): ?>
					<tr>
						<td width='10%'>
							<b><?php echo $comment->sender->name; ?></b>
						</td>
						<td width='78%' align='center'>
							<i><?php echo $comment->date; ?></i>
						</td>
						<td width='4%' align='center'>
								<div id='valorRating'>
									<?=Yii::app()->controller->renderFile(Yii::app()->basePath.'\views\comment\view_rating.php',array('comment' => $comment));?>
								</div>
						</td>
						<td width='8%' align='center'>
							<?php echo CHtml::ajaxButton("+", 
				        	CController::createUrl("comment/changeRating"), 
				          array("type" => "GET",
				                "data" => array("mais" => 1,
				                							"idUser" => $comment->id_user,
				                							"idEvent" => $event->id_event),
				                "success" => 'function(rating){
				                								$("#valorRating").html(rating);
				                              }'
				        	),
				        	array('class' => 'btn btn-small btn-success')); ?>
								<?php echo CHtml::ajaxButton(" - ", 
				        	CController::createUrl("comment/changeRating"), 
				          array("type" => "GET",
				                "data" => array("mais" => 0,
				                							"idUser" => $comment->id_user,
				                							"idEvent" => $event->id_event),
				                "success" => 'function(rating){
				                								console.log(rating);
				                								$("#valorRating").html(rating);
				                              }'
				        	),
				        	array('class' => 'btn btn-small btn-warning')); ?>
						</td>
					</tr>
					<tr>
						<td colspan='3'>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $comment->text; ?>
						</td>
					</tr>
				<?php endforeach; ?>
		</table>
		<br />
		<table class='table-bordered table-striped' width='100%'>
			<tr>
				<td width='20%' align='center'>
					<i>Insira o seu comentário</i>
				</td>
				<td width='80%' align='center'>
					<input type='text' id='txt_comment' name='txt_comment'/>
				</td>
				<td>
					<?php echo CHtml::submitButton("Enviar", array("class" => "btn"));?>
			</tr>
		</table>

	</div>

</form>

<script>
$(document).ready(function() {
  $('#btn_Vou').live("click", function(){
  	$("#vouNaoVou").val('1');
  });

  $('#btn_NaoVou').live("click", function(){
  	$("#vouNaoVou").val('0');
  });
});
</script>