<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
// Czyżby tutaj musiała być ścieżka do plików z Entity?
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/backend/Model"), $isDevMode, null, null, false);

$conn = array(
    'driver'   => 'pdo_mysql',
    'host'     => '127.0.0.1',
    'dbname'   => 'bazka',
    'user'     => 'root',
    'password' => ''
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);