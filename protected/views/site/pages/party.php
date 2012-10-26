<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Festas';
$this->breadcrumbs=array(
	'Festas',
);
?>
<h1>Festas</h1>

  <div class="cards-container">

          <div class="row-fluid">
            <div class="span12">
              <h2>Recomendado</h2>
            </div>
          </div>

          <div class="row-fluid">
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/party/pic1.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/party/pic2.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
            <div class="span4 event-card">
              <?php echo CHtml::image('/oquetavalendo/images/party/pic3.jpg', 'alt', array('class'=>'event-pic')); ?>
            </div><!--/span-->
          </div><!--/row-form-form-->
        </div> <!-- /card-container -->
