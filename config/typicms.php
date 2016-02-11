<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cache system (use cache decorator in place of repository classes)
    |--------------------------------------------------------------------------
    */
    'cache' => true,

    /*
    |--------------------------------------------------------------------------
    | Save each front office page in public/html as flat html file.
    | Pages are generated only when debug is off and no user is connected.
    | The directory is cleaned on eloquent save, delete and composer install.
    |--------------------------------------------------------------------------
    */
    'html_cache' => false,

    /*
    |--------------------------------------------------------------------------
    | You can choose not to have main locale in URLs
    |--------------------------------------------------------------------------
    |
    | If set to false, the fallback_locale defined in config/app.php
    | will not appears in URLs.
    |
    */
    'main_locale_in_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Each locale can have his own domain
    |--------------------------------------------------------------------------
    */
    // 'domains' => [
    //     'domain-name.com' => 'en',
    //     'nom-de-dmaine.fr' => 'fr',
    // ],

    /*
    |--------------------------------------------------------------------------
    | Welcome message url present in Dashboard
    |--------------------------------------------------------------------------
    */
    'welcome_message_url' => getEnv('WELCOME_MESSAGE_URL'),

    /*
    |--------------------------------------------------------------------------
    | Per module config
    |--------------------------------------------------------------------------
    |
    | Here you can override config for each module.
    |
    */
    'news' => [
        'per_page' => 50,
    ],

];
