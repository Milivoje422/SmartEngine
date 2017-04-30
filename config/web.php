<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'SmartEngine',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

    'modules' => [
        'user' => [
	        'class' => 'dektrium\user\Module',
            'enableAccountDelete' => true,
            'enableUnconfirmedLogin' => true,
            'admins' => ['milivojeivic12'],
	        'controllerMap' => [
		        'admin' => [
			        'class'  => 'dektrium\user\controllers\AdminController',
			        'layout' => 'admin_layout',
		        ],
		        'user' => [
			        'class' => 'dektrium\user\controllers\UserController',
			        'layout' => 'user_layout',
		        ],
	        ],
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',

	    'actionlog' => [
		    'class' => 'cakebake\actionlog\Module',
		],
	    'formbuilder' => [
		    'class' => '\pceuropa\forms\Module',
	    ],
	    'social' => [
		    // the module class
		    'class' => 'kartik\social\Module',

		    // the global settings for the disqus widget
		    'disqus' => [
			    'settings' => ['shortname' => 'DISQUS_SHORTNAME'] // default settings
		    ],

		    // the global settings for the facebook plugins widget
		    'facebook' => [
			    'app_id' => 'FACEBOOK_APP_ID',
			    'app_secret' => 'FACEBOOK_APP_SECRET',
		    ],

		    // the global settings for the google plugins widget
		    'google' => [
			    'clientId' => 'GOOGLE_API_CLIENT_ID',
			    'pageId' => 'GOOGLE_PLUS_PAGE_ID',
			    'profileId' => 'GOOGLE_PLUS_PROFILE_ID',
		    ],

		    // the global settings for the google analytic plugin widget
		    'googleAnalytics' => [
			    'id' => 'TRACKING_ID',
			    'domain' => 'TRACKING_DOMAIN',
		    ],

		    // the global settings for the twitter plugins widget
		    'twitter' => [
			    'screenName' => 'TWITTER_SCREEN_NAME'
		    ],
	    ],
	    'workflow' => [
		    'class' => 'cornernote\workflow\manager\Module',
	    ],
   ],

    /* Components */

    'components' => [
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'sr-SR',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],
	    'workflowSource' => [
		    'class' => 'cornernote\workflow\manager\components\WorkflowDbSource',
	    ],

        'request' => [
            'cookieValidationKey' => 'testCookie',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
		    'urlManager' =>[
			    'enablePrettyUrl'=> true,
			    'showScriptName'=> false
		    ],

    ],
    'as beforeRequest' => [
        'class' => 'app\beforeLoad\beforeRequest',
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
