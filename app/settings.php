<?php
//
// Simple config for the portal
//
return [
    // Game Server
    'server_name' => 'DSXI',
    'server_logo' => '',

    // Adjust the delay (seconds) for starting/stopping the server.
    // Do not set this below 30 seconds or you will have issues!
    'server_restart_delay' => 60,
    'server_user' => 'dsxi',

    // Commands to start the server
    'server_start' => [
        'bash /dsxi/setup/server_start',
    ],

    // Commands to stop the server
    'server_stop' => [
        'bash /dsxi/setup/server_stop',
    ],

    // default sale price for auction house
    'auction_house_default_price' => 1000,

    // Site settings
    'silex_debug' => true,
    'domain' => '.encorexi.com',
    'cookie_expire' => (86400 * 7),

    // Database
    'db_host' => '127.0.0.1',
    'db_name' => 'dsxi',
    'db_user' => 'dsxi',
    'db_pass' => 'dsxi',
];
