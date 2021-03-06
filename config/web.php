<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
	'modules' =>  [
		//Rendi 18 
		'admin' => [
            'class' => 'mdm\admin\Module',
           
        ],
		
		'master' => [
								'class' => 'app\master\Master',
							],
							
		'timbangan' => [
								'class' => 'app\timbangan\Timbangan',
							],
            
                'proyek' => [
								'class' => 'app\proyek\Proyek',
							],
                'material' => [
								'class' => 'app\material\Material',
							],
                 'po' => [
								'class' => 'app\po\PO',
							],
                 'pocust' => [
								'class' => 'app\pocust\POCust',
							]
	],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dariaman',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'authManager' => [
            'class' => 'yii\rbac\DbManager' , //'yii\rbac\PhpManager', // or use 'yii\rbac\DbManager'
			
        ],
       // 'user' => [
       //     'identityClass' => 'app\models\User',
       //     'enableAutoLogin' => true,
       //],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
		
		
	//Rendi 18 
	'assetManager' => [
            'bundles' => [
                            'dmstr\web\AdminLteAsset' => [
                                 'skin' => 'skin-purple',
            ],
        ],
    ],
	 
		'user' => [
            'identityClass' => 'mdm\admin\models\User',
            'loginUrl' => ['admin/user/login'],
                    
            'class' => 'app\components\User', /* Rendi 5 des 2017 */
        ],
		
		
		//End
		
        'db' => $db,
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
	
	//Rendi 18 
	 'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
			'site/logout',
            //'*',
			//'site/*',
            //'admin/*',
            //'some-controller/some-action',
            // The actions listed here will be allowed to everyone including guests.
            // So, 'admin/*' should not appear here in the production, of course.
            // But in the earlier stages of your development, you may probably want to
            // add a lot of actions here until you finally completed setting up rbac,
            // otherwise you may not even take a first step.
        ]
    ],
	
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
