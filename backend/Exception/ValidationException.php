<?php

namespace Exception;

class ValidationException extends \Exception
{
    public function __construct(array $validation_errors, $code = 422)
    {
        $message = $this->buildMessageFromErrors($validation_errors);
        parent::__construct($message, $code);
    }

    protected function buildMessageFromErrors(array $errors)
    {
        $message = [
            'message' => 'Validation errors',
            'type' => get_class($this),
            'errors' => $errors,
        ];
        return json_encode($message);
    }
}
