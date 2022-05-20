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
    
    'instagram' => [  
        'client_id' => env('INSTAGRAM_CLIENT_ID'),
        'client_secret' => env('INSTAGRAM_CLIENT_SECRET'),
        'redirect' => env('INSTAGRAM_REDIRECT_URI'),
    ],
    
    'facebook' => [
        'client_id' => '177535904437593',
        'client_secret' => '907b62e0f59021d9419bcfd141aa393d',
        'redirect' => 'https://bizmeth.co.in/BI/auth/facebook/callback',
    ],
    'twilio' => [
        'accountSid' => env('TWILIO_ACCOUNT_SID'),
        'apiKey' => env('TWILIO_API_KEY'),
        'apiSecret' => env('TWILIO_API_SECRET'),
        'chatServiceSid' => env('TWILIO_CHAT_SERVICE_SID'),
    ],

];
