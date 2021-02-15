<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '247219613991-tm0oj25jmrcciv6u8rhv6m8ltnh2n4s5.apps.googleusercontent.com',
        'client_secret' => 'vy3xfj-IeHSM6fcPlx9fOiYu',
        'redirect' => 'http://ec2-54-178-121-200.ap-northeast-1.compute.amazonaws.com/',
    ],    
    'facebook' => [
        'client_id' => '122926563060494',
        'client_secret' => '9fb7d0f966a8c027c478b56e21738032',
        'redirect' => 'http://54.178.121.200/',
    ],

// http://localhost/login/facebook/callback
//クライアント 94255828ec6399eb2988dd4d4be2f263
//id 122926563060494
];
