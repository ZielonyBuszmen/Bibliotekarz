<?php

namespace Exception;

class ValidationException extends \Exception
{

    protected $validation_errors;

    public function __construct(array $validation_errors, $code = 422)
    {
        parent::__construct('Validation errors', $code);
        $this->validation_errors = $validation_errors;
    }

    public function getValidationErrors()
    {
        return $this->validation_errors;
    }
}
