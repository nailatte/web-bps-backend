<?php
return [
    'paths' => ['api/*','sanctum/csrf-cookie'],
    'allowed_methods' => ['*'],
    'allowed_origins' => [
        'https://web-bps-frontend-three.vercel.app',
        'https://web-bps-frontend-git-main-nailas-projects-b55f08a2.vercel.app'
    ],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];