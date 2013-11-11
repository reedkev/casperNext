<?php

class SiteController extends Controller
{



	 public $layout='//layouts/column2';
	//if(Yii::app()->user->isGuest){
	//	$layout=='//layouts/column1';
	//}

	public function init()
	{
	   if(Yii::app()->user->isGuest)
	      Yii::app()->theme = 'public';
	   else
	      Yii::app()->theme = 'abound';

	   parent::init();
	}

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
		if(Yii::app()->user->isGuest){
			$this->render('index');			
		}
		else {
			$this->render('home');			
		}
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

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

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
			{
				// save the user login to the user session table then redirect
				$this->saveUserLoginSession(Yii::app()->user->getState('id'));
				$this->redirect(Yii::app()->user->returnUrl);
			}

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


	/**
	 * Insert a record every time the user logs in to form an audit trail
	 */
	public function saveUserLoginSession($id){

		$login_date=time();
		$login_ip=$_SERVER['REMOTE_ADDR'];
		$user_agent=$_SERVER['HTTP_USER_AGENT'];
		$event='login';
		
		// free service with daily usage limits. If we hit them, insert blank values
		//$pageContent = file_get_contents('http://freegeoip.net/json/' . $_SERVER['REMOTE_ADDR']);
		/*
		if($pageContent <> ""){
			$parsedJson  = json_decode($pageContent);
			$geocode = htmlspecialchars($parsedJson->latitude) . "," . htmlspecialchars($parsedJson->longitude);
			$city=htmlspecialchars($parsedJson->city) ;
			$region_name=htmlspecialchars($parsedJson->region_name);
			$region_code=htmlspecialchars($parsedJson->region_code);
			$country_name=htmlspecialchars($parsedJson->country_name);
			$country_code=htmlspecialchars($parsedJson->country_code);
		}
		else {
			$geocode ="";
			$city="";
			$region_name="";
			$region_code="";
			$country_name="";
			$country_code="";
		}

		$model = new UserSessions;
		$model->user_id = $id;
		$model->login_date = $login_date;
		$model->login_ip_address = $login_ip;
		$model->user_agent = $user_agent;
		$model->geocode = $geocode;
		$model->city = $city;
		$model->region_name = $region_name;
		$model->region_code = $region_code;
		$model->country_name = $country_name;
		$model->country_code = $country_code;

		if ($model->validate()){
		    $model->save();
		} else {
		    print_r($model->errors);
		}
		*/

	}


}