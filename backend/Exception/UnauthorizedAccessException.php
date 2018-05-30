<?php

namespace Exception;

class UnauthorizedAccessException extends \Exception
{
    public function __construct($message = 'Unauthorized access. Please, sign in', $code = 401)
    {
        parent::__construct($message, $code);
    }
}
