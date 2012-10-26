<?php /* @var $this Controller */ ?>

<!DOCTYPE html>
<html lang="pt">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>O que ta valendo?</title>


  <!-- Fav Icons -->
  <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png" /> 
  <link rel="shortcut icon" type="image/x-icon"  href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png" />

	<!-- BootStrap Twitter framework -->
	<link  href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" rel="stylesheet" />
	<link  href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" rel="stylesheet"/>

	
	<!-- User Styles -->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" rel="stylesheet">
  
  


	
	 <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
</head>

<body>

 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo_white.png" class="logo-menu" width="20"></img></a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">              
              <?php $this->widget('zii.widgets.CMenu',array(
          'activeCssClass'=>'active',
                        'activateItems'=>true,
                        'activateParents'=>true,
                  'encodeLabel'=>false,
                  'activeCssClass'=>'active',
                  'htmlOptions'=>array('class'=>'nav pull-right'),
          'items'=>array(
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
          ),
        )); ?>
            </p>
            <ul class="nav">             
              	<?php $this->widget('zii.widgets.CMenu',array(
					'activeCssClass'=>'active',
		             				'activateItems'=>true,
		             				'activateParents'=>true,
									'encodeLabel'=>false,
									'activeCssClass'=>'active',
									'htmlOptions'=>array('class'=>'nav'),
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						//array('label'=>'Shows', 'url'=>array('/site/page', 'view'=>'about')),
            array('label'=>'Shows', 'url'=>array('/site/shows')),
						array('label'=>'Festas', 'url'=>array('/site/party')),
            array('label'=>'Teatro', 'url'=>array('/site/theater')),
            array('label'=>'Cinema', 'url'=>array('/site/movies')),
            array('label'=>'Fotos', 'url'=>array('/site/photo')),  		
					),
				)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<hr><br>


<div class="container-fluid main-container">
	<?php echo $content; ?>

</div><!-- container -->

<footer>
        <p>&copy; Company 2012</p>
      </footer>

<!-- Javascript - No final para a pagina carregar mais rapido -->
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>	
	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>

</body>
</html>
