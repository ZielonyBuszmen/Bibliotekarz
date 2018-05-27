<?php
/**
 * Bootstrap an appliacation
 */
require_once "bootstrap.php";

use Dispatcher\Dispatcher;

/**
 * Appends routing list from 'Routing/routing_list.php' ($route variable)
 */
require_once routing_list;

/**
 * Runs dispatcher and pass inside $route lists
 */
Dispatcher::dispatch($route);
