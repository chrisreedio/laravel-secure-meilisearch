<?php

// config for ChrisReedIO/SecureMeilisearch
return [
    'commands' => [
        'register' => false,
    ],


    'key' => [
        /**
         * The number of minutes a search key should be valid for.
         */
        'lifetime' => env('MEILISEARCH_KEY_EXPIRATION', 60 * 12),
    ],
];
