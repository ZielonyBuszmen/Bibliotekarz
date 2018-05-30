<?php
/**
 * Bootstrap an appliacation
 */
require_once "bootstrap.php";

use Dispatcher\Dispatcher;
use Exception\ExceptionHandler;

/**
 * Appends routing list from 'Routing/routing_list.php' ($route variable)
 */
require_once routing_list;

/**
 * Runs dispatcher and pass inside $route lists
 */
try {
    Dispatcher::dispatch($route);
} catch (Exception $e) {
    new ExceptionHandler($e);
}
