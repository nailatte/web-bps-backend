<?php
return [
    'paths' => ['api/*'],
    'allowed_methods' => ['*'],
<<<<<<< HEAD
    'allowed_origins' => ['http://localhost:5174','https://web-bps-frontend-three.vercel.app/'],
=======
    'allowed_origins' => ['http://localhost:5174', 'https://web-bps-frontend-three.vercel.app/'],
>>>>>>> c98ffa5 (Allow frontend domain in CORS config)
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,
];
