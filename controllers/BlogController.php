<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\BlogPost;
use app\models\PostCategories;
use yii\web\UploadedFile;

//use app\models\ImageSearch;
//use GuzzleHttp\Psr7\UploadedFile;
//use app\models\Category ;
//use yii\helpers\ArrayHelper;
//use cakebake\actionlog\model\ActionLog;
//use app\models\Images;
//use yii\filters\VerbFilter;

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

	public function actionCreate()
	{
		$post = new BlogPost();
		$category  = PostCategories::find()->all();;
		if($post->load(Yii::$app->request->post()))
		{
			$post->created_at = date('Y-m-d H:i:s');
			$post->user_id = \Yii::$app->user->id;
			$post->beforeUpload(UploadedFile::getInstance($post, 'file'));
			if($post->save())
			{
				$post->upload(UploadedFile::getInstance($post, 'file'));
				return $this->render('index');
			}
		}else{
			return $this->render('createPost',[
				'post' => $post,
				'categories' => $category,
			]);
		}
	}

	public function actionCreatetag($post_id)
	{

	}

}
?>