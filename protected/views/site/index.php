<?php
/* @var $this SiteController */
//TODO: GORDY -> consertar layout para exibir mais por linha, ou algo do tipo.
//TODO: GORDY -> ver o lance dos botões ajax, pra carregar o primeiro item direto no load, sem clicar.

Yii::app()->clientScript->registerScript('carousel',"
//tabs
$('#hottest-carousel').carousel({
  interval: 500
})

$('.event-card').hover(function(){
	$(this).addClass('event-card-active');
}, function(){
	$(this).removeClass('event-card-active');
});
");
?>
<?php /*
<?php $lastEvents = Event::model()->findAll(array('order'=>'date_time desc', 'limit'=>3))?>
  <div id="hottest-carousel" class="carousel slide">
    <div class="carousel-inner">
     <?php foreach($lastEvents as $event):?>
      <div class="item carousel-item">
		<?php echo CHtml::image($event->image, '',array('height'=>10))?>
        <div class="carousel-caption">              
         <h4> <?php echo CHtml::encode($event->title)?> </h4>
        </div>
      </div>
     <?php endforeach;?>
    </div>        
  </div>
*/ ?>
  <div class="cards-container">
    <ul id="tabs" class="nav nav-tabs">
      <li id="tab-top" class="tab-item active">
        <?php echo CHtml::ajaxLink("Principais Eventos", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=1",
                "success" =>"function(dados){
                                $('#eventos').html(dados);
                                $('.tab-item').removeClass('active');
                                $('#tab-top').addClass('active');
                              }"
          ));?>
      </li>
      <li id="tab-recomended" class="tab-item">
        <?php echo CHtml::ajaxLink("Recomendado", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=2",
                "success" => "function(dados){
                                $('#eventos').html(dados);
                                $('.tab-item').removeClass('active');
                                $('#tab-recomended').addClass('active');
                              }"
          ));?>
      </li>
      <li id="tab-women" class="tab-item">
        <?php echo CHtml::ajaxLink("Mais mulheres", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=3",
                "success" => "function(dados){
                                $('#eventos').html(dados);
                                $('.tab-item').removeClass('active');
                                $('#tab-women').addClass('active');
                              }"
          ));?>
      </li>
      <li id="tab-men" class="tab-item">
        <?php echo CHtml::ajaxLink("Mais homens", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=4",
                "success" => "function(dados){
                                $('#eventos').html(dados);
                                $('.tab-item').removeClass('active');
                                $('#tab-men').addClass('active');
                              }"
          ));?>
      </li>
      <li id="tab-all" class="tab-item">
        <?php echo CHtml::ajaxLink("Todos", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=0",
                "success" => "function(dados){
                                $('#eventos').html(dados);
                                $('.tab-item').removeClass('active');
                                $('#tab-all').addClass('active');
                              }"
          ));?>
      </li>
    </ul>
    
    <div id='eventos'>
      <?=$this->renderPartial("_allEvents", array('events' => $events));?>
    </div>

  </div>


<script>
$(document).ready(function() {
  $('#tabs').click(function (e) {
    $('ul.nav-tabs li.active').removeClass('active')
    $("this").parent('li').addClass('active')
  });
});
</script>