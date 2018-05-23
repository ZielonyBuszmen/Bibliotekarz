<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$path_to_entity_files = array(__DIR__ . "/backend/Model");
$config = Setup::createAnnotationMetadataConfiguration($path_to_entity_files, $isDevMode, null, null, false);

$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'bazka',
    'user'     => 'root',
    'password' => ''
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);