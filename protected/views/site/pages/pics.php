<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Fotos';
$this->breadcrumbs=array(
	'Fotos',
);
?>
<h1>Fotos</h1>

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
              <h2>Fotos</h2>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic2.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->

            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic3.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row-form-form-->

           <div class="row-fluid">
            <div class="span4 event-card">
             <?php echo CHtml::image('/oquetavalendo/images/pics/pic4.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic5.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic6.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row-form-form-->

           <div class="row-fluid">
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic7.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->

            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic8.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->

            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic9.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row-form-form-->

           <div class="row-fluid">
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic10.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic11.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
             <?php echo CHtml::image('/oquetavalendo/images/pics/pic12.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row-form-form-->


        </div> <!-- /card-container -->
