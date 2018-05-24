<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;
$ds = DIRECTORY_SEPARATOR;
$consts = __DIR__  . $ds . 'consts.php';
include_once $consts;
require_once bootstrap;

$entityManager = \Model\EntityManagerFactory::getEntityManager();
return ConsoleRunner::createHelperSet($entityManager);