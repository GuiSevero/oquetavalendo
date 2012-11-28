<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'O que ta valendo?',

	//select the language
	'language'=>'pt',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'oqtv',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
		    'urlFormat'=>'path',
		    //'showScriptName'=>false,
		    'caseSensitive'=>false,        
			'rules'=>array(
				'about'=>'site/about',
			    'contact'=>'site/contact',
			    '/'=>'site/index',
			    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
			    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
		'db'=>array(
			'connectionString' => 'mysql:host=174.120.126.202;dbname=oqueta_testes',
			'emulatePrepare' => true,
			'username' => 'oqueta_tester',
			'password' => 'diogocosta',
			'charset' => 'utf8',
		),
		 
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=oqtv',
			'emulatePrepare' => true,
			'username' => 'oqtv',
			'password' => 'gorder',
			'charset' => 'utf8',
		),
		*/
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'grsevero@gmail.com',
	),
);