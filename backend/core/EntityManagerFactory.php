<?php

namespace Core;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 * Factory class to get EntityManager whole project
 */
class EntityManagerFactory
{
    /**
     * @var EntityManagerFactory
     */
    private static $entity_manager_factory = null;

    /**
     * @var EntityManager
     */
    private $entity_manager;

    /**
     * @return EntityManager The created EntityManager.
     */
    public static function getEntityManager(): EntityManager
    {
        $instance = self::getInstance();
        return $instance->entity_manager;
    }

    protected static function getInstance()
    {
        if (self::$entity_manager_factory == null) {
            self::$entity_manager_factory = new self();
        }
        return self::$entity_manager_factory;
    }

    /**
     * EntityManagerFactory constructor.
     */
    protected function __construct()
    {
        $this->createEntityManager();
    }

    protected function createEntityManager()
    {
        $CONFIG = $GLOBALS['CONFIG'];
        $doctrine_config = $this->getDoctrineConfig();
        try {
            $this->entity_manager = EntityManager::create($CONFIG['database'], $doctrine_config);
        } catch (\Exception $e) {
            die(json_encode(["ERROR" => $e->getMessage()]));
        }
    }

    protected function getDoctrineConfig()
    {
        $CONFIG = $GLOBALS['CONFIG'];
        $is_dev_mode = $CONFIG['env']['is_dev_mode'];
        $doctrine_config = Setup::createAnnotationMetadataConfiguration(entity_files_localization, $is_dev_mode, doctrine_proxy_dir, null, false);
        $doctrine_config->setAutoGenerateProxyClasses(true == $is_dev_mode);
        return $doctrine_config;
    }
}
