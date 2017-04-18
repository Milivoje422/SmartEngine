<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'modules' => [
        'rbac' => 'dektrium\rbac\RbacConsoleModule',
	],
    'controllerNamespace' => 'app\commands',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],


			'controllerMap' => [
		    'daemon' => [
			'class' => 'inpassor\daemon\Controller',
			'uid' => 'daemon', // The daemon UID. Giving daemons different UIDs makes possible to run several daemons.
			'pidDir' => '@runtime/daemon', // PID file directory.
			'logsDir' => '@runtime/logs', // Log files directory.
			'clearLogs' => false, // Clear log files on start.
			'workersMap' => [
				'watcher' => [
					'class' => 'inpassor\daemon\workers\Watcher',
					'active' => true, // If set to false, worker is disabled.
					'maxProcesses' => 1, // The number of maximum processes of the daemon worker running at once.
					'delay' => 60, // The time, in seconds, the timer should delay in between executions of the daemon worker.
				],

		        ],
		    ],
		],

    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
