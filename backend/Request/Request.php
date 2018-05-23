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
        $this->body = $this->fetchBody($this->request_method);
    }

    private function getRequestMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    protected function fetchBody($request_method)
    {
        if ($request_method == 'GET') {
            return (object)$_GET;
        }
        return json_decode(file_get_contents("php://input"));
    }
}