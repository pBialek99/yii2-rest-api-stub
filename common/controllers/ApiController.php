<?php

namespace common\controllers;

use sizeg\jwt\JwtHttpBearerAuth;
use yii\rest\Controller;

/** 
 * ase controller for all REST API endpoints
 * 
 * Provides common API configuration shared across all versions,
 * including JWT authentication and other REST-related behaviors.
 * 
 * Every API controller should extend this class instead of
 * {@see \yii\rest\Controller}
 */
abstract class ApiController extends Controller
{
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => JwtHttpBearerAuth::class,
        ];

        return $behaviors;
    }
}