<?php

namespace Routing;


class RouteDataObject
{

    public $reuqest_type; // get, post, put, delete
    public $url; // request url, eq /ble/sth

//    // controller and method
    public $controller;
    public $action;

    public function __construct($request_type, $url)
    {
        $this->request_type = $request_type;
        $this->parsed_url = $url;
    }

    public function to($controller, $action)
    {
        $this->controller = $controller;
        $this->action = $action;
    }
}
