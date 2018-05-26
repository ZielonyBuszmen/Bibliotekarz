<?php
$ds = DIRECTORY_SEPARATOR;
$consts = realpath(__DIR__ . $ds . '..') . $ds . 'consts.php';
require_once $consts;

require_once composer_autoload;

// get config from config.ini and create global $CONFIG array
$ini_array = parse_ini_file(config, true);
global $CONFIG;
$CONFIG = $ini_array;

// here we can add something like middleware or include other plugins
