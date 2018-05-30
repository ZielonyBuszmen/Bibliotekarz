<?php

namespace Exception;

class InvalidRoutingException extends \Exception
{
    public function __construct($routing_uri, $request_method, $code = 404)
    {
        $message = "Routing not found: (URI: {$routing_uri}, METHOD: {$request_method})";
        parent::__construct($message, $code);
    }
}
