<?php
return [
    'authorizationRequestUrl' => env('AUTHORIZE_URL','https://appcenter.intuit.com/connect/oauth2'),
    'tokenEndPointUrl' => env('TOKEN_ENDPOINT_URL','https://oauth.platform.intuit.com/oauth2/v1/tokens/bearer'),
    'client_id' => env('CLIENT_ID','ABZ2MqETG9HEEnIsQWzZQc7FUPvLHpwWNtXRygZKs1f7d59xHj'),
    'client_secret' => env('CLIENT_SECRET','KDLLzAOrMeNWaLnOKXdt30aHHu188PM9RolCs14b'),
    'oauth_scope' => env('OAUTH_SCOPE','com.intuit.quickbooks.accounting openid profile email phone address'),
    'oauth_redirect_uri' => env('OAUTH_REDIRECT_URL','https://bizmeth.co.in/Finsuite/authorize'),
];