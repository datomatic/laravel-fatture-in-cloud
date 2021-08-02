<?php
// config for Datomatic/FattureInCloud
return [
    'access_token'  => env('FATTURE_IN_CLOUD_ACCESS_TOKEN'),
    'company_id'  => env('FATTURE_IN_CLOUD_COMPANY_ID'),
    'endpoint' => env('FATTURE_IN_CLOUD_ENDPOINT','https://api-v2.fattureincloud.it/'),
];
