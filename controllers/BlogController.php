<?php

namespace app\controllers;

//use app\models\ImageSearch;
//use GuzzleHttp\Psr7\UploadedFile;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
//use app\models\ContactForm;
//use app\models\Category ;
//use yii\helpers\ArrayHelper;
//use cakebake\actionlog\model\ActionLog;
//use app\models\Images;
//use yii\filters\VerbFilter;
//use yii\web\UploadedFile;

class BlogController extends Controller
{
	/**
	 * @inheritdoc
	 */
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'only' => ['logout'],
				'rules' => [
					[
						'actions' => ['logout'],
						'allow' => true,
						'roles' => ['@'],
					],
				],
			],
			'verbs' => [
				'class' => VerbFilter::className(),
				'actions' => [
					'logout' => ['post'],
				],
			],
		];
	}

	/**
	 * @inheritdoc
	 */
	public function actions()
	{
		return [
			'error' => [
				'class' => 'yii\web\ErrorAction',
			],
			'captcha' => [
				'class' => 'yii\captcha\CaptchaAction',
				'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
			],
		];
	}


	public function actionIndex()
	{
		// First page on blog
		return $this->render('index');
	}


}
?>