<?php
require_once "bootstrap.php";

use Model\Product;
use Response\Response;

// tworzy entity manager
$entity_manager = \Model\EntityManagerFactory::getEntityManager();

require_once routing_list;
// Czas na działanie dispatchera
Dispatcher::dispatch($route);




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