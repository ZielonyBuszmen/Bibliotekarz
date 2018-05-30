<?php

namespace Exception;

class BadRequestException extends \Exception
{
    public function __construct($message = 'Bad request was sent', $code = 400)
    {
        parent::__construct($message, $code);
    }
}
