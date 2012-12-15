<?php

class CommentController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionChangeRating($mais, $idUser, $idEvent)
	{
		$comment = Comment::model()->findByAttributes(array("id_user" => $idUser,
																								"id_event" => $idEvent));
		if($mais)
			$comment->rating = $comment->rating + 1;
		else
			$comment->rating = $comment->rating - 1;

		$comment->save();
		echo CJSON::encode($comment->rating);
  }



	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}