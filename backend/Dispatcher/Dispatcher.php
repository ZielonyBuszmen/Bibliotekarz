<?php

namespace Dispatcher;

use Exception\ExceptionHandler;
use Exception\InvalidRoutingException;
use Permissions\PermissionChecker;
use Permissions\PlaceResourcesMap;
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
        try {
            $request = new Request();
            $single_route = self::getRoute($routing_list, $request);

            $place_resources_map = new PlaceResourcesMap();
            $permission_checker = new PermissionChecker($place_resources_map);
            $permission_checker->check($single_route->controller, $single_route->action);

            ControllerFactory::createControllerFromRouter($single_route->controller, $single_route->action, $request);
        } catch (\Exception $e) {
            new ExceptionHandler($e);
        }
    }

    /**
     * @param Route $routing_list
     * @param Request $request
     * @return RouteDataObject
     * @throws InvalidRoutingException
     */
    protected static function getRoute(Route $routing_list, Request $request)
    {
        if (isset($routing_list->routes[$request->request_method][$request->url])) {
            return $routing_list->routes[$request->request_method][$request->url];
        } else {
            throw new InvalidRoutingException($request->url, $request->request_method);
        }
    }
}
