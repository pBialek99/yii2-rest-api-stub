<?php

return [
    'adminEmail'    => 'admin@example.com',
    'senderEmail'   => 'noreply@example.com',
    'senderName'    => 'Example.com mailer',

    'jwt' => [
        'issuer'    => getenv('JWT_ISSUER'),
        'audience'  => getenv('JWT_AUDIENCE'),
        'id'        => getenv('JWT_ID'),
        'expire'    => (int) getenv('JWT_EXPIRE'),
    ],
];
