<?php

namespace Exception;

class InvalidRoutingException extends \Exception
{
    public function __construct($message = 'Routing not found', $code = 404)
    {
        parent::__construct($message, $code);
    }
}
