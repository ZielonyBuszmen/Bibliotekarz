<?php

use Routing\Route;
use Controller\TestowyCtrl;
use Controller\WelcomeCtrl;

$route = new Route();

// tests requests
$route->get('wake_up')->to(WelcomeCtrl::class, 'wakeUpServer');
$route->get('')->to(WelcomeCtrl::class, 'testGetRequest');
$route->post('')->to(WelcomeCtrl::class, 'testPostRequest');
$route->put('')->to(WelcomeCtrl::class, 'testPutRequest');
$route->delete('')->to(WelcomeCtrl::class, 'testDeleteRequest');
$route->get('test')->to(WelcomeCtrl::class, 'testGetRequest');
$route->post('test')->to(WelcomeCtrl::class, 'testPostRequest');
$route->put('test')->to(WelcomeCtrl::class, 'testPutRequest');
$route->delete('test')->to(WelcomeCtrl::class, 'testDeleteRequest');


// todo do wywalenia
$route->post('test')->to(TestowyCtrl::class, 'testPosta');

return $route;