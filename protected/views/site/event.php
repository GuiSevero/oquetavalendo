<form name='event' method='POST'>
	
	<div class="hero-unit">
	  <h1><?php echo $event->title?></h1>
	  <br />
	  <table border=0>
		  <tr>
				<td colspan='2' align='right'>
					<?php 
					if(!$vou): ?>
						<div id='vou'>
			        <?php 
			        	echo CHtml::ajaxButton("Vou!", 
				        	CController::createUrl("site/irNaoIr"), 
				          array("type" => "GET",
				                "data" => "valueVou=1",
				                "success" => 'function(){
				                                $("#vou").hide();
				                                $("#naoVou").show();
				                              }'
				        	),
				        	array('class' => 'btn btn-success')); ?>
				    </div>	
		      
				  <?php
		      else: 
		      	 echo CHtml::ajaxButton("Não vou mais", 
			        	CController::createUrl("user/irNaoIr"), 
			          array("type" => "POST",
			                "data" => array("valueVou" => 0,
				                								"idEvent" => $event->id_event),
			                "success" => 'function(dados){
			                                $("#naoVou").hide();
				                              $("#vou").show();
			                              }'
			        	),
			        	array('class' => 'btn btn-warning'));
			    endif; ?>
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
		  		<p><b>Local:</b> <?php echo $event->Place->name?></p>
		  	</td>
		  </tr>
		  <tr>
		  	<td>
		  		<p><b>Endereço:</b> <?php echo $event->Place->address?></p>
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