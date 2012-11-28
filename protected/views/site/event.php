<div class="hero-unit">
  <h1><?php echo $event->title?></h1>
  <br />
  <table border=1>
	  <tr>
	  	<td colspan='2' align='right'>
	  		<?php echo CHtml::button("Vou!", array(), array('class' => 'btn-success'))?>
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