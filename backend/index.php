<?php
require_once "bootstrap.php";

use Dispatcher\Dispatcher;


require_once routing_list;
// Czas na działanie dispatchera
Dispatcher::dispatch($route);
