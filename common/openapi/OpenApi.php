<?php

namespace common\openapi;

use OpenApi\Attributes as OA;


#[OA\Info(
    version: '0.0.0',
    title: 'Yii2 REST API Stub'
)]
#[OA\Server(
    url: 'http://localhost:8080',
    description: 'Development'
)]
#[OA\SecurityScheme(
    securityScheme: 'bearerAuth',
    type: 'http',
    scheme: 'bearer',
    bearerFormat: 'JWT'
)]
class OpenApi
{

}
