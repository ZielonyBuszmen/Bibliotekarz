<?php
$ds = DIRECTORY_SEPARATOR;
$bootstrap = __DIR__ . $ds . 'backend' . $ds . 'bootstrap.php';
require_once $bootstrap;

use Doctrine\ORM\Tools\Console\ConsoleRunner;

$entityManager = \Model\EntityManagerFactory::getEntityManager();
return ConsoleRunner::createHelperSet($entityManager);