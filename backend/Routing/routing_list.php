<?php

use Routing\Route;
use Controller\TestowyCtrl;
use Controller\WelcomeCtrl;

$route = new Route();
global $route;

// tests requests
$route->get('wake_up')->to(WelcomeCtrl::class, 'wakeUpServer');
$route->get('')->to(WelcomeCtrl::class, 'testGetRequest');
$route->post('')->to(WelcomeCtrl::class, 'testPostRequest');
$route->put('')->to(WelcomeCtrl::class, 'testPutRequest');
$route->delete('')->to(WelcomeCtrl::class, 'testDeleteRequest');

$route->get('test')->to(TestowyCtrl::class, 'testGeta');
$route->post('test')->to(TestowyCtrl::class, 'testPosta');
