<?php

namespace Model;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

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
            die($e->getMessage());
        }
    }

    protected function getDoctrineConfig()
    {
        $CONFIG = $GLOBALS['CONFIG'];
        return Setup::createAnnotationMetadataConfiguration(entity_files_localization, $CONFIG['env']['is_dev_mode'], null, null, false);
    }
}
