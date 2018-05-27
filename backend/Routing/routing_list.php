<?php

use Routing\Route;
use Controller\TestowyCtrl;

$route = new Route();
global $route;

$route->get('test')->to(TestowyCtrl::class, 'testGeta');
$route->post('test')->to(TestowyCtrl::class, 'testPosta');
// ....
