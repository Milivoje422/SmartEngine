<?php

return [
	'adminEmail' => 'milivojeivic422@gmail.com',
    'languages' => [
	    'sr' => [
		    'language' => 'Serbian',
		    'flag' => '/bootstrap/img/langsr.png',
	    ],
        'ru' => [
	        'language' => 'Russian',
	        'flag' => '/bootstrap/img/RussiaFlag.png',
	    ],
        'en' => [
	        'language' => 'English',
	        'flag' => '/bootstrap/img/langen.png',
	    ],
        'fr' => [
	        'language' => 'Français',
	        'flag' => '/bootstrap/img/FranceFlag.png',
        ],
		'de' => [
			'language' => 'Deutschland',
			'flag' => '',
		],

	],
    'app_name' => 'SmartEngine',
	'logo' => '../../AppImages/57846147-Simple-gear-cog-wheel-or-settings-logo.png',
	'errorEmail' => 'milivojeivic422@gmail.com',
	'userInfoEmail' => 'milivojeivic422@gmail.com',
	'originalImageFolder' => 'protected/origimages/',
	'customImageFolder' => 'protected/customdownload/',
	'previewImageFolder' => '/images/',
	'bannerImageFolder' => '/banners/',
	'thumbImageFolder' => '/thumbs/',
	'sliderImageFolder' =>'images/slider/',
	'previewImageWidth' => '800', //create preview image with this width value
	'thumbImageWidth' => '350', //create preview image with this width value
	'maxImageSize' => 10 * 1024 * 1024, //image size limit in bytes
	'imageDimensionMin' => 100, //minimum fow width and height
	'imageDimensionMax' => 30000, //maximum fow width and height
	'allowedImageTypes' => array('image/jpeg'), //validation
	'allowedBannerTypes' => array('image/jpeg'), //validation
	'allowedSliderTypes' => array('image/jpeg'), //validation
	'waterMarkPath' => 'images/watermark.png', //watermark image
	'thumbWaterMarkPath' => 'images/watermark_small.png', //small watermark image
	'errorLogFile' => 'errorLog.txt',
	'defaultTranslationLanguage' => 1,
	'slash'=>'',
	'defaultPhotoPrice'=>'20.00',
	'founder' => 'Ivic Milivoje',


	'agency' => [
		'about_us' => [
			'menu' => Yii::t('user','About us'),
			'url' => '/site/agency/1',
		],
		'conditions' => [
			'menu' => Yii::t('user','Conditions of use'),
			'url' => '/site/agency/2',
		],
		'contracts' => [
			'menu' => Yii::t('user','Contracts'),
			'url' => '/site/agency/3',
		],
		'site_frends' => [
			'menu' => Yii::t('user','Friends site'),
			'url' => '/site/agency/4',
		],

	],
	'adsense' => [
		'client'  => 'ca-pub-1234567890123456',
		'slot'    => '1234567890',
		'enabled' => true,
	],

];


