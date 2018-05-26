<?php

namespace Routing;

// Route::get('ble')->to('kontroler', 'funkcja');


class Route
{
    public $routes;

    public function get($url)
    {
        return $this->addRouteDataObject('GET', $url);
    }

    public function post($url)
    {
        return $this->addRouteDataObject('POST', $url);
    }

    public function put($url)
    {
        return $this->addRouteDataObject('PUT', $url);
    }

    public function delete($url)
    {
        return $this->addRouteDataObject('DELETE', $url);
    }

    protected function addRouteDataObject($type, $url)
    {
        $route_data_object = new RouteDataObject($type, $url);
        $this->routes[$route_data_object->request_type][$url] = $route_data_object;
        return $route_data_object;
    }
}
