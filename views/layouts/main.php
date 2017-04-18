<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this); 
?>
<?php $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Favicon -->
	<link rel="icon" href="../../AppImages/57846147-Simple-gear-cog-wheel-or-settings-logo.png">

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,300,400" type="text/css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" type="text/css" rel="stylesheet">

    <?= Html::csrfMetaTags(); ?>
        <title><?= Yii::$app->id; ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

		        <?= $content ?>
	

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
