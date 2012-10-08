<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
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
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<br><br>


<div class="container-fluid">
	<?php echo $content; ?>


	   <footer>
        <p>&copy; Company 2012</p>
      </footer>

</div><!-- container -->