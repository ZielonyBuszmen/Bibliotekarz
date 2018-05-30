<?php

namespace Exception;

use Request\Request;
use Response\Response;

class ExceptionHandler
{

    protected $exception;

    public function __construct(\Exception $e)
    {
        $this->exception = $e;
        if ($e instanceof ValidationException) {
            $this->parseValidationException($e->getMessage(), $e->getCode());
        } else {
            $this->parseException();
        }
    }

    public function parseException()
    {
        $e = $this->exception;
        $type = get_class($this->exception);
        $this->buildExceptionResponse($e->getMessage(), $e->getCode(), $type);
    }


    protected function buildExceptionResponse($message, $code, $type)
    {
        $response_body = [
            'message' => $message,
            'type' => $type,
        ];
        $request = new Request();
        $response = new Response($request->request_method);
        $response->setCode($code);
        $response->setResponseBody($response_body);
        $response->send();
    }

    protected function parseValidationException($message_json, $code)
    {
        $request = new Request();
        $response = new Response($request->request_method);
        $response->setCode($code);
        $response->setResponseBody($message_json);
        $response->send(false);
    }
}
