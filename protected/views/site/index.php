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

          <div class="row-fluid">
            <div class="span12">
              <h2>Recomendado</h2>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span4 event-card">
              <h2>Event Title</h2>
              <p>Event Description: Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4 event-card">
              <h2>Event Title </h2>
              <p>Event Description: Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4 event-card">
              <h2>Event Title </h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-form-form-->
        </div> <!-- /card-container -->


        <div class="cards-container">

          <div class="row-fluid">
            <div class="span12">
              <h2> Principais Eventos </h2>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span4 event-card">
              <h2>Event Title </h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4 event-card">
              <h2>Event Title </h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
            <div class="span4 event-card">
              <h2>Event Title </h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row -->
        </div> <!-- /card-container -->
  