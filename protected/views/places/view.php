<?php
/* @var $this PlacesController */
/* @var $model Places */

$this->breadcrumbs=array(
	'Places'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Places', 'url'=>array('index')),
	array('label'=>'Create Places', 'url'=>array('create')),
	array('label'=>'Update Places', 'url'=>array('update', 'id'=>$model->id_place)),
	array('label'=>'Delete Places', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_place),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Places', 'url'=>array('admin')),
);
?>

<h1>View Places #<?php echo $model->id_place; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_place',
		'name',
		'cordX',
		'cordY',
		'address',
		'number',
		'secondNumber',
		'phone',
		'mail',
	),
)); ?>
