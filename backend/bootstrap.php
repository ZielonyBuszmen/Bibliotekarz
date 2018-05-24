<?php
$ds = DIRECTORY_SEPARATOR;
$consts = realpath(__DIR__ . $ds . '..') . $ds . 'consts.php';
require_once $consts;
require_once composer_autoload;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// get config from config.ini and create global $CONFIG array
$ini_array = parse_ini_file(config, true);
global $CONFIG;
$CONFIG = $ini_array;

