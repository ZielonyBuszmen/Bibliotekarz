<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$ds = DIRECTORY_SEPARATOR;
$consts = realpath(__DIR__ . $ds . '..') . $ds . 'consts.php';
require_once $consts;
require_once composer_autoload;

// get config from config.ini and create global $CONFIG array
$ini_array = parse_ini_file(config, true);
global $CONFIG;
$CONFIG = $ini_array;


// obtaining the entity manager
function getEntityManager()
{
    $CONFIG = $GLOBALS['CONFIG'];
    $doctrine_config = Setup::createAnnotationMetadataConfiguration(entity_files_localization, $CONFIG['env']['is_dev_mode'], null, null, false);
    try {
        $entity_manager = EntityManager::create($CONFIG['database'], $doctrine_config);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $entity_manager;
}
