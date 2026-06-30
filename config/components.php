<?php

$db = require __DIR__ . '/db.php';

return [
    'jwt' => [
        'class'             => \sizeg\jwt\Jwt::class,
        'key'               => getenv('JWT_SECRET'),
    ],
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => '0yjL_D4Jp_AitpxSOtRmlZ-2WQurN3dT',
    ],
    'cache' => [
        'class' => \yii\caching\FileCache::class,
    ],
    'user' => [
        'identityClass' => \common\modules\user\models\User::class,
        'enableSession' => false,
        'loginUrl'      => null,
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'mailer' => \yii\mail\MailerInterface::class,
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => \yii\log\FileTarget::class,
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'db' => $db,
    /*
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
        ],
    ],
    */
];
