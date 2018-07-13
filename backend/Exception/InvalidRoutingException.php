<?php

namespace Exception;

class InvalidRoutingException extends \Exception
{
    public function __construct($routing_uri, $request_method, $code = 404)
    {
        $message = "Routing not found: (URI: {$routing_uri}, METHOD: {$request_method}). " .
            "You have to pass URI like this {BASE_URL}/test, where 'test' is routing name. " .
            "Allows method: 'GET', 'POST', 'PUT', 'DELETE'. Params must be sent in 'body' request, " .
            "except for GET requests where params must be sent in URL (like /test?a=12&b=4)";
        parent::__construct($message, $code);
    }
}
