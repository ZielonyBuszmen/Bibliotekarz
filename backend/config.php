<?php
/**
 * Plik z konfiguracją, w przyszłości można zamienić na .env lub coś takiego
 */
global $CONFIG;

$CONFIG['is_dev_mode'] = true;

$CONFIG['connection'] = [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'bazka',
    'user' => 'root',
    'password' => ''
];
