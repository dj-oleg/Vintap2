<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [

    'id' => 'basic',
    'name'=>'Vintapes',
    //'lang'=>"en-US",
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'dfjknj324sdf',
            'baseUrl'=> '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'maxSourceLines' => 20,
            'errorAction' => 'site/error',
        ],
        /*'mailer' => [
            'class' => \yii\symfonymailer\Mailer::class,
            'viewPath' => '@app/mail',
            // send all mails to a file by default.
            'useFileTransport' => true,
        ],*/
        /*'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                //'host' => 'poligon.s-hostp.net',
                'host' => 'mail.poligon.s-hostp.net',
                'username' => 'suport@poligon.s-hostp.net',
                'password' => 'yV8yL6xY9y',
                'port' => '465',
                'encryption' => 'ssl',
            ],
            'useFileTransport' => false,
        ],*/
        'mailer' => [
          'class' => \yii\symfonymailer\Mailer::class,
          'transport' => [
              'scheme' => 'smtps',
              'host' => 'eushared10.twinservers.net',
              'username' => 'suport@vintapes.com',
              'password' => 'YrKg4Vo1c(E5',
              'port' => 465,
              'dsn' => 'native://default',
          ],
          /*'transport' => [
              'scheme' => 'smtps',
              'host' => 'mail.poligon.s-hostp.net',
              'username' => 'suport@poligon.s-hostp.net',
              'password' => 'yV8yL6xY9y',
              'port' => 465,
              'dsn' => 'native://default',
          ],*/
          //'viewPath' => '@common/mail',
          // send all mails to a file by default. You have to set
          // 'useFileTransport' to false and configure transport
          // for the mailer to send real emails.
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
        'db' => $db,
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],
            ],
        ],

        'urlManager' => [
            'baseUrl' => 'https://vintapes.com/',
            //'baseUrl' => 'http://poligon.s-hostp.net/',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                        '/' => 'site/explore',
                        'main2' => 'site/explore2',
                        'main3' => 'site/explore3',
                        'remPack' => 'user/rem_pack',
                        'cart' => 'cart/cart',
                        '<action>' => '<controller>/<action>',
                        'site/pack/<id>' => 'site/pack',
                        'site/creator/<id>' => 'site/creator',
                        'user/edit_pack/<id>' => 'user/edit_pack',
                        'user/edit_pack2/<id>' => 'user/edit_pack2',
                        'page/<alias>' => 'site/page',
                        'site/packgfx/<id>' => 'site/packgfx',
                        //'cart' => 'cart/cart',
                        //'site/allpacks/<s>/<g>' => 'site/allpacks'
                        'test/pack/<id>' => 'test/pack',
                        'test/packgfx/<id>' => 'test/packgfx',
                        'user/upload/<id>/<type>' => 'user/upload',
                        'user/upload2/<id>/<type>' => 'user/upload2',
                        'upload/<id>/<type>' => 'upload/upload',
                        'site/search/<search>' => 'site/search',
                        'ajax/edit_pack/<id>' => 'ajax/edit_pack',
                        
            ],
        ],

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
        'allowedIPs' => ['109.236.40.65', '::1'],
    ];
}

return $config;
