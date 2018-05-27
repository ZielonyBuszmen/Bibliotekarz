<?php

namespace Dispatcher;

use Request\Request;
use Routing\Route;
use Routing\RouteDataObject;

class Dispatcher
{
    /**
     * Main method, which doing "dispatch". Method get the reqest, searches appropriate route and create controller
     * @param Route $routing_list
     */
    public static function dispatch(Route $routing_list)
    {
        $request = new Request(); // get request
        /** @var RouteDataObject $single_route */
        $single_route = self::getRoute($routing_list, $request);
        ControllerFactory::createControllerFromRouter($single_route->controller, $single_route->action, $request);
    }


    protected function getRoute(Route $routing_list, Request $request)
    {
        if (isset($routing_list->routes[$request->request_method][$request->url])) {
            return $routing_list->routes[$request->request_method][$request->url];
        } else {
            throw new Exception("Routing not found");
        }
    }
}