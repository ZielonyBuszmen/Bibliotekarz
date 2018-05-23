<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";
require_once "config.php";

// obtaining the entity manager
function getEntityManager()
{
    $CONFIG = $GLOBALS['CONFIG'];
    $doctrine_config = Setup::createAnnotationMetadataConfiguration($CONFIG['path_to_entity_files'], $CONFIG['is_dev_mode'], null, null, false);
    try {
        $entity_manager = EntityManager::create($CONFIG['connection'], $doctrine_config);
    } catch (Exception $e) {
        die($e->getMessage());
    }
    return $entity_manager;
}
