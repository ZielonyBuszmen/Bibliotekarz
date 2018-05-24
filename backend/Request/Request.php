<?php

namespace Request;

class Request
{
    public $request_method;
    public $body;

    public function __construct($expected_type_of_request)
    {
        $this->request_method = $this->getRequestMethod();
        if ($expected_type_of_request != $this->request_method) {
//            throw new \Exception("O niet, zly typ requestu!!"); todo
            echo "zly typ requestu";
        }
        $this->body = $this->getBody($this->request_method); // tymczasowo, potem tylko będzie korzystać się z getBody()
    }

    private function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function getBody()
    {
        if ($this->isGet()) {
            return (object)$_GET;
        }
        return json_decode(file_get_contents("php://input"));
    }

    public function isGet(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::GET;
    }

    public function isPost(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::POST;
    }

    public function isPut(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::PUT;
    }

    public function isDelete(): bool
    {
        return $_SERVER['REQUEST_METHOD'] == \HttpConsts::DELETE;
    }
}