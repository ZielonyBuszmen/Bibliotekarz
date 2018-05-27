<?php

namespace Routing;


class RouteDataObject
{

    /** @var string - like 'get', 'post', 'put' or 'delete' */
    public $request_type;

    /** @var string - request url, eq /ble/sth */
    public $url;

    /** @var string - controller name */
    public $controller;

    /** @var string - controller's name method */
    public $action;

    public function __construct(string $request_type, string $url)
    {
        $this->request_type = $request_type;
        $this->url = $url;
    }

    /**
     * @param string $controller - destination controller
     * @param string $action - destination controller's method
     */
    public function to(string $controller, string $action)
    {
        $this->controller = $controller;
        $this->action = $action;
    }
}
