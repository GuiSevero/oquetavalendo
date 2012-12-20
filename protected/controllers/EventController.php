<?php

class EventController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view', 'party', 'theater', 'show', 'exibeDetalhes'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Event;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_event));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Event']))
		{
			$model->attributes=$_POST['Event'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_event));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Event');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Event('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Event']))
			$model->attributes=$_GET['Event'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	/**
	 * 
	 * Carrega todas as festas
	 */
	public function actionParty(){
		
		$dataProvider=new CActiveDataProvider('Event', array('criteria'=>array( 'condition'=>"type=1")));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	
	/**
	 * 
	 * Carrega todas os show
	 */
	public function actionShow(){
		
		$dataProvider=new CActiveDataProvider('Event', array('criteria'=>array( 'condition'=>"type=3")));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
	}
	

	public function actionExibeDetalhes($idEvent)
	{
		
		//Grava a visita do usuário.
		$navigation = new UserNavigation;
		$navigation->id_user = Yii::app()->user->id;
		
		$event = Event::model()->findByAttributes(array('id_event' => $idEvent));
		
		$navigation->typeEvent = $event->eventType->id_type;
		$navigation->save();
		$userId = Yii::app()->user->id;
		
		//Se for comentário
		if(isset($_POST['txt_comment']))
   	{
   		$comment = new Comment;
			$comment->id_user = $userId;
			$comment->id_event = $idEvent;
			$comment->date =  date('d/m/Y H:i:s');
			$comment->text = $_POST['txt_comment'];
			$comment->save();
			$this->redirect(array('exibeDetalhes','idEvent'=>$idEvent));
		}

		//Exibe os dados na view
		$event = Event::model()->findByAttributes(array('id_event' => $idEvent));
		$userEvent = UserEvent::model()
			->findByAttributes(array('id_user' => $userId,
														'id_event' => $idEvent));

		//Marca 'vou' ou 'nãoVou'
		if(count($userEvent) > 0)
			$vou = true;
		else
			$vou = false;

		$comments = Comment::model()->findAllByAttributes(array('id_event' => $idEvent), array('order' => 'rating DESC'));

		$this->render("event", array("event" => $event, 
																"vou" => $vou,
																"comments" => $comments));
	}
	
	/**
	 * 
	 * Carrega todas as peças de teatro
	 */
	public function actionTheater(){
		
		$dataProvider=new CActiveDataProvider('Event', array('criteria'=>array('condition'=>"type=2")));
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Event::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='event-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
	
}
