<?php

return [

    /**
     * Cache time in minutes
     */
    'time_to_live' => 60,

    /**
     * Directus CMS Base URL
     * eg: https://database.account.directus.io
     */
    'base_cms_url' => env('DIRECTUS_CMS_URL', ''),

    'path_assets' => env('DIRECTUS_PATH_ASSETS', ''),

    /**
     * API Key
     * -- HIGHLY RECOMMENDED THAT THIS BE PLACED IN .env FILE! --
     */
    'api_key' => env('DIRECTUS_API_KEY', '')

];
