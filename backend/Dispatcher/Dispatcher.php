<?php
namespace Dispatcher;

use Request\Request;
use Routing\Route;
use Routing\RouteDataObject;

class Dispatcher
{
    public static function dispatch(Route $routing_list)
    {

// todo
// co robi dispatcher?
// bierze request który przyszedł
// rozbija go przy pomocy klasy Request
// bierze router i na jego podstawie określa, jaki kontroler i akcję w nim odpalić


// biere request
        $request = new Request();

// szukam odpowiedniego routingu z requesta
// jesli nie istnieje to kaplica, errory.
        /** @var RouteDataObject $single_route */
        $single_route = self::getRoute($routing_list, $request);

// potem tworze kontroler i przekazuję sterowanie do niego
        ControllerFactory::createControllerFromRouter($single_route->controller, $single_route->action, $request);
    }


    protected function getRoute(Route $routing_list, Request $request)
    {
        if(isset($routing_list->routes[$request->request_method][$request->url])) {
            return $routing_list->routes[$request->request_method][$request->url];
        } else {
            throw new Exception("Routing not found");
        }
    }
}

