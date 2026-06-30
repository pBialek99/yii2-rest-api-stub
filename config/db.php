<?php

return [
    'class' => yii\db\Connection::class,

    'dsn' => sprintf(
        'pgsql:host=postgres;port=5432;dbname=%s',
        getenv('POSTGRES_DB')
    ),

    'username' => getenv('POSTGRES_USER'),
    'password' => getenv('POSTGRES_PASSWORD'),

    'charset' => 'utf8',
];
