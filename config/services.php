<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '718263795210253',
        'client_secret' => '86dc659125e4f0c35df1aa731c81d816',
        'redirect' => 'http://localhost/socialLogin/public/callback',
    ],
    'google' => [
        'client_id' => '416909806429-2tvojdhsev5du4dih3k4aqlceelbr759.apps.googleusercontent.com',
        'client_secret' => 'hw7k5l-zHtKt5rpdm88Q7WPL',
        'redirect' => 'http://localhost/socialLogin/public/callback1'
    ],

];
