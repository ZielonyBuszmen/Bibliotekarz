<?php
require_once "bootstrap.php";

// naglowki z tutoriala, trzeba sprawdzic
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
http_response_code(200);


$request = new Request\Request('POST');


$b = [
    'cos' => 'cale_nic',
    'zagniezdzenie' => ['duze', 'male', 'to', 'array'],
    'dziadostwo' => ['klucz' => 'dziadostwo'],
];

echo json_encode($b);

$a = nUlL;