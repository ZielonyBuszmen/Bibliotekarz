<?php
require_once "bootstrap.php";

require_once routing_list;
// Czas na działanie dispatchera
Dispatcher::dispatch($route);
