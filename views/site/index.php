 <?php
 use yii\helpers\Html;
 use yii\bootstrap\ActiveForm;
 use yii\captcha\Captcha;
 use app\assets\JqueryFiles;

 JqueryFiles::register($this);

 // Coming Soon Page

 ?>
 <div id="social" xmlns="http://www.w3.org/1999/html">
	 <ul class="social-icons pull-right hidden-xs">
		 <li style="margin: 7px; color: aliceblue;">Follow us on:</li>
		 <li class="social-rss">
			 <a href="https://www.linkedin.com/in/milivoje-ivic-b60a04115/" target="_blank" title="RSS"></a>
		 </li>
		 <li class="social-twitter">
			 <a href="https://twitter.com/milivojeivic422" target="_blank" title="Twitter"></a>
		 </li>
		 <li class="social-facebook">
			 <a href="https://www.facebook.com/Mili422" target="_blank" title="Facebook"></a>
		 </li>
		 <li class="social-googleplus">
			 <a href="https://plus.google.com/103756269355951216143" target="_blank" title="GooglePlus"></a>
		 </li>
	 </ul>
 </div>
 <div id="header" style="background-position: 50% 0%; height:100%;" data-stellar-background-ratio="0.5">
	 <div class="container">
		 <div class="row">
			 <!-- Logo -->
			 <div class="logo">
				 <a href="#" title="">
					 <?= Html::img('AppImages/zupcanici31.gif', ['alt'=>'Logo', 'class'=>'thing']);?>
				 </a>
			 </div>
			 <!-- End Logo -->
		 </div>
		 <!-- Top Menu -->
		 <div class="row text-light">
			 <div class="col-md-12">
				 <div class="text-center">
					 <div class="error-404-page text-center">
						 <?php if (Yii::$app->session->hasFlash('subscribed')): ?>
							 <div class="alert alert-success">
								 <?= \Yii::$app->session->getFlash('subscribed'); ?>
							 </div>
						 <?php else: ?>
							 <h3><?= Yii::t('app','Coming soon!'); ?></h3>
							 <?= Html::img('AppImages/logo.png', ['style'=>'width:200px;']) ?>
							 <h3>Enter your email to subscribe:</h3>
							 <div class="input-append">
								 <?php $form = ActiveForm::begin(['id' => 'subscribe-form',
								 'options' => [ 'class' => 'form-search search-404']]); ?>
								 <div id="result"></div>
								 <?= $form->field($model, 'email')->textInput(['id'=>'email','class' => 'span2 search-query','style'=>'color: black;','maxlength' => true]); ?>
								 <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']); ?>
								 <?php ActiveForm::end(); ?>
							 </div>
						 <?php endif; ?>
					 </div>
				 </div>
			 </div>
		 </div>
		 <!-- End Top Menu -->
	 </div>
 </div>



