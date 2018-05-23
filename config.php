<?php
/**
 * Plik z konfiguracją, w przyszłości można zamienić na .env lub coś takiego
 */
$CONFIG = [];

$CONFIG['is_dev_mode'] = true;
$CONFIG['path_to_entity_files'] = [__DIR__ . "/backend/Model"];

$CONFIG['connection'] = [
    'driver' => 'pdo_mysql',
    'host' => '127.0.0.1',
    'dbname' => 'bazka',
    'user' => 'root',
    'password' => ''
];
