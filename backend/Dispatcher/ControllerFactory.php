<?php

namespace Dispatcher;

use Model\EntityManagerFactory;
use Request\Request;

class ControllerFactory
{
    /**
     * @param string $controller - controller name
     * @param string $action - method name
     * @param Request $request - request passed to controller's method argument
     */
    public static function createControllerFromRouter($controller, $action, Request $request)
    {
        $entity_manager = EntityManagerFactory::getEntityManager();
        $ctrl = new $controller($entity_manager);
        $ctrl->{$action}($request);
    }
}