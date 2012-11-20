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
    <ul class="nav nav-tabs">
      <li class="active">
        <?=CHtml::ajaxLink("Principais Eventos", CController::createUrl("SiteController/escolherUmNomeBom"), 
          array("type" => "POST",
                "update" => "eventos"));?></a>
      </li>
      <li class="">
        <a href="#">Recomendado</a>
      </li>
    </ul>
    
    <div id='eventos'>
      <?=$this->renderPartial("_allEvents", array('events' => $events));?>
    </div>

  </div>