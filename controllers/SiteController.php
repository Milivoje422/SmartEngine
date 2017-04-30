<?php

namespace app\controllers;

use app\models\ImageSearch;
//use GuzzleHttp\Psr7\UploadedFile;
use app\models\Subscribe;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\ContactForm;
//use app\models\Category ;
//use yii\helpers\ArrayHelper;
use cakebake\actionlog\model\ActionLog;
use app\models\Images;
//use yii\filters\VerbFilter;
use yii\web\UploadedFile;

class SiteController extends Controller
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
	    // Save to database;
		$model = new Subscribe();

	    // Send mail to Admin;
	    $adminmail = new ContactForm();

	    // Send mail to Customer;
	    $membermail = new ContactForm();

	    if ($model->load(Yii::$app->request->post())) {
		    $model->created_at = date('Y-m-d h:m:s');
		    $model->user_ip = \Yii::$app->getRequest()->getUserIP();

		    $email = $model->email; //Define a user mail.

		    $adminmail->subject = "Subscribe";
		    $adminmail->email = $email;
		    $adminmail->body = 'Subscriber!';
		    $adminmail->name = 'Subscriber!';

		    $membermail->subject = "Subscribe!";
		    $membermail->email = \Yii::$app->params['adminEmail'];
		    $membermail->body = "Thank you for subscribe! \n";
		    $membermail->name = "Smart Engine bot!";

		    if ($model->save()) {
			    if($adminmail->contact(Yii::$app->params['adminEmail']) || $membermail->contact($email)) {

				    Yii::$app->session->setFlash('subscribed','Thank you for subscribe!');
				    ActionLog::add('success', 1);
				    return $this->refresh();

			    }
		    }
	    }
	    return $this->render('index', [
		    'model' => $model,
	    ]);
    }


//    public function actionError()
//    {
//        $exception = Yii::$app->errorHandler->exception;
//        if ($exception !== null) {
//            return $this->render('error', ['exception' => $exception]);
//        }
//    }


//	public function actionCategory($id)
//	{
//		$query = PostSearch::find()->where(["category_id" => $id]);
//		$countQuery = clone $query;
//		$pages = new Pagination([/*'defaultPageSize' => 6, */ 'totalCount' => $countQuery->count()]);
//		$models = $query->offset($pages->offset)
//			->limit($pages->limit)
//			->all();
//
//		return $this->render('science', [
//			'models' => $models,
//			'pages' => $pages,
//		]);
//	}

//	public function actionGallery(){
//		return $this->render('gallery');
//	}

	public function actionHome(){
		return $this->render('home');
	}
//
//	public function actionNews(){
//		return $this->render('news');
//	}
//
//
//	public function actionReports(){
//		return $this->render('reports');
//	}

//	public function actionAddimages(){
//
//		$model = new Images();
//
//
//		if ($model->load(Yii::$app->request->post()))
//		{
//			$imageName = $model->img_name;
//			$model->file = UploadedFile::getInstance($model, 'file');
//			$model->file->saveAs( 'uploads/'. $imageName.'.'.$model->file->extension );
//
//			$model->img_path = 'uploads/'. $imageName.'.'.$model->file->extension;
//
//
////		  $model->file = UploadedFile::getInstance($model, 'file');
////			$path = 'uploads/';
////
////			if(!is_dir($path))
////				$path = mkdir('uploads/');
////
////			$model->file->saveAs($path.$model->img_name.'.'.$model->file->extension);
////			$model->img_path = $path.$model->img_name.'.'.$model->file->extension;
//
//
//
//			$model->created_at = date('Y-m-d h:m:s');
//
//			if($model->save())
//				return $this->redirect(['gallery']);
//		} else {
//			return $this->render('add_images', [
//				'model' => $model,
//			]);
//		}
//	}



    /**
     * Displays contact page.
     *
     * @return string
     */
//    public function actionContact()
//    {
//        $model = new ContactForm();
//        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
//            Yii::$app->session->setFlash('contactFormSubmitted');
//	        ActionLog::add('success', $this->id);
//
//            return $this->refresh();
//        }
//
//        return $this->render('contact', [
//            'model' => $model,
//        ]);
//    }

    /**
     * Displays about page.
     *
     * @return string
     */
//    public function actionAbout()
//    {
//        return $this->render('about');
//    }
//	public function actionLanguage()
//	{
//		if(isset($_POST['lang'])){
//			Yii::$app->language = $_POST['lang'];
//			$cookie = new yii\web\Cookie([
//				'name' => 'lang',
//				'value' => $_POST['lang']
//			]);
//
//			Yii::$app->getResponse()->getCookies()->add($cookie);
//		}
//	}
//
//    public function actionAddimage()
//    {
//        $model = new Image();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->image_id]);
//        } else {
//            return $this->render('add_images', [
//                'model' => $model,
//            ]);
//        }
//    }





}
