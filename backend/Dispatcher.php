<?php

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
        $request = new Request('tutaj niepotrzebne');

// biere liste routingow
        $router = $routing_list;

// szukam odpowiedniego routingu z requesta
// jesli nie istnieje to kaplica, errory.
        /** @var RouteDataObject $single_route */
        $single_route = $router->routes[$request->request_method][$request->url];

// potem tworze kontroler i przekazuję sterowanie do niego
        ControllerFactory::createControllerFromRouter($single_route->controller, $single_route->action, $request);

    }
}

