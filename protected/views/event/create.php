<?php
/* @var $this EventController */
/* @var $model Event */

$this->breadcrumbs=array(
	'Events'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Eventos', 'url'=>array('index')),
	array('label'=>'Gerenciar Eventos', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Evento</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>