<?php

namespace Exception;

use Core\Request\Request;
use Core\Response\Response;

class ExceptionHandler
{

    protected $exception;

    public function __construct(\Exception $e)
    {
        $this->exception = $e;
        if ($e instanceof ValidationException) {
            $this->parseValidationException();
        } else {
            $this->parseException();
        }
    }

    public function parseException()
    {
        $type = get_class($this->exception);
        $response_body = [
            'ok' => false,
            'type' => $type,
            'message' => $this->exception->getMessage(),
        ];
        $this->buildExceptionResponse($response_body, $this->exception->getCode());
    }

    public function parseValidationException()
    {
        /** @var ValidationException $e */
        $e = $this->exception;
        $type = get_class($this->exception);
        $response_body = [
            'ok' => false,
            'type' => $type,
            'message' => $e->getMessage(),
            'errors' => $e->getValidationErrors(),
        ];
        $this->buildExceptionResponse($response_body, $e->getCode());
    }

    protected function buildExceptionResponse($response_body, $code)
    {
        $request = new Request();
        $response = new Response($request->request_method);
        $response->setCode($code);
        $response->setResponseBody($response_body);
        $response->send();
    }
}
