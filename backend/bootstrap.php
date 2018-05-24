<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$ds = DIRECTORY_SEPARATOR;
$consts = realpath(__DIR__  . $ds . '..') . $ds. 'consts.php';
require_once $consts;
require_once composer_autoload;
require_once config;

// obtaining the entity manager
function getEntityManager()
{
    $CONFIG = $GLOBALS['CONFIG'];
    $doctrine_config = Setup::createAnnotationMetadataConfiguration(entity_files_localization, $CONFIG['is_dev_mode'], null, null, false);
    try {
        $entity_manager = EntityManager::create($CONFIG['connection'], $doctrine_config);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $entity_manager;
}
