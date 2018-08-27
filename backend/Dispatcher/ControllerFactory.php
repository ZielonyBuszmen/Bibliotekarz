<?php

namespace Dispatcher;

use Core\EntityManagerFactory;
use Core\Request\Request;
use Core\Response\Response;

class ControllerFactory
{
    /**
     * @param string $controller - controller name
     * @param string $action - method name
     * @param Request $request - request passed to controller's method argument
     * @return Response
     */
    public static function createControllerFromRouter($controller, $action, Request $request)
    {
        $entity_manager = EntityManagerFactory::getEntityManager();
        $ctrl = new $controller($entity_manager);
        return $ctrl->{$action}($request);
    }
}
