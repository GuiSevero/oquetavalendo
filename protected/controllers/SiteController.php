<?php

class SiteController extends Controller
{

	public $layout='//layouts/column1';

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		//Na tela inicial, exibe todos os atuais eventos
		$dataHoraAtual = getdate();
		$dataHoraAtual = $dataHoraAtual['year']."-".$dataHoraAtual['mon']."-".$dataHoraAtual['mday']." ".$dataHoraAtual['hours'].":".$dataHoraAtual['minutes'].":".$dataHoraAtual['seconds'];

		$allEvents = Event::model()->findAllByAttributes(array("priority" => true), "date_time <= '".$dataHoraAtual."'");

		$this->render('index', array('events' => $allEvents));
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	public function actionTabSelecionadaAtualizaView($id)
	{	
		$dataHoraAtual = getdate();
		$dataHoraAtual = $dataHoraAtual['year']."-".$dataHoraAtual['mon']."-".$dataHoraAtual['mday']." ".$dataHoraAtual['hours'].":".$dataHoraAtual['minutes'].":".$dataHoraAtual['seconds'];

		switch($id)
		{
			case 1: //Prioridade
				$events = Event::model()->findAllByAttributes(array("priority" => '1'), "date_time >= '".$dataHoraAtual."'");
				break;
			
			case 2: //Recomendado
				
				//retorna os eventos que o usuário logado acessou
				$sql = "SELECT typeEvent, COUNT(*) as clicks 
								FROM user_navigation 
								WHERE id_user = ".Yii::app()->user->id." 
								GROUP BY typeEvent";
				$oDbConnection = Yii::app()->db; // Getting database connection (config/main.php has to set up database
				$oCommand = $oDbConnection->createCommand($sql);
				$navigation = $oCommand->queryAll();
				
				//somatorio de todos os eventos acessados
				$sum = 0;
				foreach($navigation as $nav):
					$sum += $nav['clicks'];
				endforeach;
				
				//calculo percentual
				$percent = 0;
				$percent_type = array();
				foreach($navigation as $nav):
					$percent = ($nav['clicks']/$sum);
					$percent_type[$nav['typeEvent']] = $percent*100;
				endforeach;
				
				$events = Event::model()->findAllByAttributes(array(), array('condition' => "date_time >= '".$dataHoraAtual."'"));

				$addEvent = array();
				$countEvents = 1;
				while($countEvents < 9):
					foreach($events as $event):
						$varRand = rand(0,10);
						if($varRand >= 5):
							switch($event->type):
								case 1:
									$varRand = rand(1,100);
									if($varRand <= $percent_type[1] && !in_array($event->id_event, $addEvent)):
										$addEvent[] = $event->id_event;
										$countEvents++;
									endif;
									break;
								case 2:
									$varRand = rand(1,100);
									if($varRand <= $percent_type[2] && !in_array($event->id_event, $addEvent)):
										$addEvent[] = $event->id_event;
										$countEvents++;
									endif;
									break;
								case 3:
									$varRand = rand(1,100);
									if($varRand <= $percent_type[3] && !in_array($event->id_event, $addEvent)):
										$addEvent[] = $event->id_event;
										$countEvents++;
									endif;
									break;
								case 4:
									$varRand = rand(1,100);
									if($varRand <= $percent_type[4] && !in_array($event->id_event, $addEvent)):
										$addEvent[] = $event->id_event;
										$countEvents++;
									endif;
									break;
							endswitch;
						endif;
					endforeach;
				endwhile;
				
				//Cria string para consulta
				$countEvts = 1;
				$total = count($addEvent);
				$in = "(";
				foreach ($addEvent as $k => $evt):
					if($countEvts < $total):
						$in .= $evt.",";
						$countEvts++;
					else:
						$in .= $evt.")";
					endif;
				endforeach;
				
				$events = Event::model()->findAllByAttributes(array(), array('condition' => "date_time >= '".$dataHoraAtual."' AND id_event in ".$in.""));

				break;
			case 3: //Mais Mulheres
				$events = Event::model()->findAllByAttributes(array(), array('condition' => "date_time >= '".$dataHoraAtual."'",
																																			'order' => 'numberGirls DESC'));
				
				break;

			case 4: //Mais Homens
				$events = Event::model()->findAllByAttributes(array(), array('condition' => "date_time >= '".$dataHoraAtual."'",
																																			'order' => 'numberMen DESC'));
				break;

			default: //Todos
				$events = Event::model()->findAllByAttributes(array(), "date_time >= '".$dataHoraAtual."'");
				break;
		}

		$this->renderPartial('_allEvents', array('events' => $events));
	}

	/**
	 * Displays the contact page
	 */
	public function actionSignUp()
	{
		$model=new User;
		if(isset($_POST['USerForm']))
		{
			$model->attributes=$_POST['UserForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}


	public function actionPhoto(){
		$this->render('pages/pics');
	}


	public function actionMovies(){
		$this->render('pages/movie');
	}


	public function actionTheater(){
		$this->render('pages/theater');
	}


	public function actionShows(){
		$this->render('pages/shows');
	}


	public function actionParty(){
		$this->render('pages/party');
	}

}