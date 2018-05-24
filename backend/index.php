<?php
require_once "bootstrap.php";

$request = new Request\Request('POST');
$R = $request->getBody();


$b = [
    'cos' => 'cale_nic',
    'zagniezdzenie' => ['duze', 'male', 'to', 'array'],
    'dziadostwo' => ['klucz' => 'dziadostwo'],
];
$response = new \Response\Response('POST');
$response->setResponseBody($b);

$response->buildResponse();

$a = nUlL;