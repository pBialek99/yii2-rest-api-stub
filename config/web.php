<?php

$params = require __DIR__ . "/params.php";
$components = require __DIR__ . "/components.php";

$config = [
    "id" => "basic",
    "basePath" => dirname(__DIR__),
    "bootstrap" => ["log"],
    "container" => [
        "singletons" => [
            \yii\mail\MailerInterface::class => [
                "class" => \yii\symfonymailer\Mailer::class,
                // send all mails to a file by default.
                "useFileTransport" => true,
                "viewPath" => "@app/mail",
            ],
        ],
    ],
    "aliases" => [
        "@bower" => "@vendor/bower-asset",
        "@npm" => "@vendor/npm-asset",
        "@common" => dirname(__DIR__) . "/common",
    ],
    "components" => $components,
    "params" => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config["bootstrap"][] = "debug";
    $config["modules"]["debug"] = [
        "class" => \yii\debug\Module::class,
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config["bootstrap"][] = "gii";
    $config["modules"]["gii"] = [
        "class" => \yii\gii\Module::class,
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
