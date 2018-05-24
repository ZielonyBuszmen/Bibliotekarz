<?php

use Model\Product;
use Response\Response;

require_once "bootstrap.php";

$entity_manager = \Model\EntityManagerFactory::getEntityManager();

$request = new Request\Request('POST');
$R = $request->getBody();


$b = [
    'cos' => 'cale_nic',
    'zagniezdzenie' => ['duze', 'male', 'to', 'array'],
    'dziadostwo' => ['klucz' => 'dziadostwo'],
];

$data_from_database = $entity_manager->getRepository(Product::class)->getAll();

$response = new Response('POST');
$response->setResponseBody($b);
$response->buildResponse();

$a = nUlL;