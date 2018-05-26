<?php

use Controller\TestowyCtrl;
use Routing\Route;

$route = new Route();
global $route;

$route->get('test')->to(TestowyCtrl::class, 'testGeta');
// ....
