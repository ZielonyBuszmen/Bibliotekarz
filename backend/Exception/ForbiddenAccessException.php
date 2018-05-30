<?php

namespace Exception;

class ForbiddenAccessException extends \Exception
{
    public function __construct($message = 'Access to this source is forbidden.', $code = 401)
    {
        parent::__construct($message, $code);
    }
}
