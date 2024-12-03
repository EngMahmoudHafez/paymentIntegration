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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'BAYMOB_BASE_URL'=>env('BAYMOB_BASE_URL'),
    'BAYMOB_API_KEY'=>env('BAYMOB_API_KEY'),

    'TAP_BASE_URL'=>env('TAP_BASE_URL'),
    'TAP_SECRET_KEY'=>env('TAP_SECRET_KEY'),
    'TAP_PUBLIC_KEY'=>env('TAP_PUBLIC_KEY'),

    'MYFATOORAH_BASE_URL'=>env('MYFATOORAH_BASE_URL'),
    'MYFATOORAH_API_KEY'=>env('MYFATOORAH_API_KEY'),

    'PAYPAL_BASE_URL'=>env('PAYPAL_BASE_URL'),
    'PAYPAL_CLIENT_ID'=>env('PAYPAL_CLIENT_ID'),
    'PAYPAL_CLIENT_SECRET'=>env('PAYPAL_CLIENT_SECRET'),
];
