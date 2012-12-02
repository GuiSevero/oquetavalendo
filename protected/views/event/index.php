<?php
/* @var $this EventController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Events',
);

$this->menu=array(
	array('label'=>'<i class="icon-plus"></i> Adicionar Evento', 'url'=>array('create')),
	array('label'=>'<i class="icon-tasks"></i> Gerenciar Eventos', 'url'=>array('admin')),
);
?>

<h1>Eventos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
