<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Shows';
$this->breadcrumbs=array(
	'Shows',
);
?>
<h1>Shows</h1>

  <div class="cards-container">

          <div class="row-fluid">
            <div class="span12">
              <h2>Recomendado</h2>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row-form-form-->
        </div> <!-- /card-container -->


        <div class="cards-container">

          <div class="row-fluid">
            <div class="span12">
              <h2> Lançamentos </h2>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/pics/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row -->
        </div> <!-- /card-container -->
