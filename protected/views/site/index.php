<?php
/* @var $this SiteController */

Yii::app()->clientScript->registerScript('carousel',"
//tabs
$('#hottest-carousel').carousel({
  interval: 4500
})
");
?>
  <div id="hottest-carousel" class="carousel slide">
    <div class="carousel-inner">
      <div class="item carousel-item active">
        <img src="http://www.qualeaboa.com.br/wp-content/uploads/2012/01/6834evanescence.jpg">
        <div class="carousel-caption">              
         <h4> 04/10 – Evanescence no Pepsi On Stage. </h4>
        </div>
      </div>
      <div class="item carousel-item">
        <img src="http://www.qualeaboa.com.br/wp-content/uploads/2012/01/soja-02.jpg">
        <div class="carousel-caption">
          <h4>05/10 – S O J A @ Pepsi On Stage</h4>                
        </div>
      </div>
      <div class="item carousel-item">
        <img src="http://www.qualeaboa.com.br/wp-content/uploads/2012/09/capa17.jpg">
        <div class="carousel-caption">
          <h4>Lounge M.Grupo no show da Ana Carolina @ Teatro do Sesi</h4>                
        </div>
      </div>
    </div>        
  </div>

  <div class="cards-container">
    <ul id="tabs" class="nav nav-tabs">
      <li id="tab1" class="active">
        <?=CHtml::ajaxLink("Principais Eventos", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=1",
                "success" => 'function(dados){
                                $("#eventos").html(dados);
                              }'
          ));?></a>
      </li>
      <li id="tab2" class="">
        <?=CHtml::ajaxLink("Recomendado", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=2",
                "success" => 'function(dados){
                                $("#eventos").html(dados);
                              }'
          ));?>
      </li>
      <li id="tab3" class="">
        <?=CHtml::ajaxLink("Todos", CController::createUrl("site/tabSelecionadaAtualizaView"), 
          array("type" => "GET",
                "data" => "id=0",
                "success" => 'function(dados){
                                $("#eventos").html(dados);
                              }'
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