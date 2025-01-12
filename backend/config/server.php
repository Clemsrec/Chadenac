<?php

return [
    'https' => env('HTTPS', true),
    'ssl_cert_path' => env('SSL_CERT_PATH', '/private/etc/apache2/ssl/server.crt'),
    'ssl_key_path' => env('SSL_KEY_PATH', '/private/etc/apache2/ssl/server.key'),
];